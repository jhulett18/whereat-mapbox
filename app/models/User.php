<?php 


/**
 * User class
 */
class User
{
	
	use Model;

	protected string $table = 'users';

	protected array $allowedColumns = [

		'id',
		'google_id',
		'name',
		'email',
		'profile_image'
	];
	
	/**
	 * @param $data
	 *
	 * @return bool
	 */
	public function validate($data): bool {
		$this->errors = [];

		if(empty($data['email']))
		{
			$this->errors['email'] = "Email is required";
		}else
		if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
		{
			$this->errors['email'] = "Email is not valid";
		}
		
		if(empty($data['password']))
		{
			$this->errors['password'] = "Password is required";
		}
		
		//If username is empty
		if(empty($data['username']))
		{
			$this->errors['username'] = "Username is required";
		}
		
		if(empty($data['terms']))
		{
			$this->errors['terms'] = "Please accept the terms and conditions";
		}

		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
	
	/**
	 * @param $data
	 *
	 * @return false
	 */
	public function checkUser($data = array()){
		if(!empty($data)){
			// Check whether the user already exists in the database
			$checkQuery = "SELECT * FROM ".$this->userTbl." WHERE oauth_provider = '".$data['oauth_provider']."' AND oauth_uid = '".$data['oauth_uid']."'";
			$checkResult = $this->db->query($checkQuery);
			
			// Add modified time to the data array
			if(!array_key_exists('modified',$data)){
				$data['modified'] = date("Y-m-d H:i:s");
			}
			
			if($checkResult->num_rows > 0){
				// Prepare column and value format
				$colvalSet = '';
				$i = 0;
				foreach($data as $key=>$val){
					$pre = ($i > 0)?', ':'';
					$colvalSet .= $pre.$key."='".$this->db->real_escape_string($val)."'";
					$i++;
				}
				$whereSql = " WHERE oauth_provider = '".$data['oauth_provider']."' AND oauth_uid = '".$data['oauth_uid']."'";
				
				// Update user data in the database
				$query = "UPDATE ".$this->userTbl." SET ".$colvalSet.$whereSql;
				$update = $this->db->query($query);
			}else{
				// Add created time to the data array
				if(!array_key_exists('created',$data)){
					$data['created'] = date("Y-m-d H:i:s");
				}
				
				// Prepare column and value format
				$columns = $values = '';
				$i = 0;
				foreach($data as $key=>$val){
					$pre = ($i > 0)?', ':'';
					$columns .= $pre.$key;
					$values  .= $pre."'".$this->db->real_escape_string($val)."'";
					$i++;
				}
				
				// Insert user data in the database
				$query = "INSERT INTO ".$this->userTbl." (".$columns.") VALUES (".$values.")";
				$insert = $this->db->query($query);
			}
			
			// Get user data from the database
			$result = $this->db->query($checkQuery);
			$userData = $result->fetch_assoc();
		}
		
		// Return user data
		return !empty($userData)?$userData:false;
	}
}