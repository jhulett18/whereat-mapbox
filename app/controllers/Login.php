<?php 

/**
 * login class
 */
class Login
{
	use Controller;
	
	/**
	 * @return void
	 */
	
	public function index(): void {
		$data = [];
		
		require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/google/apiclient-services/autoload.php';
		$client = new Google_Client();
		$client->setClientId(GOOGLE_CLIENT_ID);
		$client->setClientSecret(GOOGLE_CLIENT_SECRET);
		$client->setRedirectUri(GOOGLE_REDIRECT_URL);
		
		$client->addScope("email");
		$client->addScope("profile");
		if(isset($_GET['code'])) {
			$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
			if(!isset($token["error"])) {
				$client->setAccessToken($token['access_token']);
				// getting profile information
				$google_oauth        = new Google_Service_Oauth2($client);
				$google_account_info = $google_oauth->userinfo->get();
				
				// TODO: First check if user is in DB
				// Create a new user
				$user = new User;
				
				// Check google_id
				$row = array(
					'google_id'   => $google_account_info->id,
				);
				
				$inDB = $user->first($row);
				if($inDB) {
					//login
					$_SESSION['login_id'] = $google_account_info->id;
					header('Location: home');
				} else {
					//create user
					$user_data = array(
						'google_id'   => $google_account_info->id,
						'name'        => trim($google_account_info->name),
						'email'       => $google_account_info->email,
						'profile_image' => $google_account_info->picture
					
					);
					// show($user_data);
					$user->insert($user_data);
					$_SESSION['login_id'] = $google_account_info->id;
					header('Location: home');
				}
				exit;
			}
		}
				
				
				
				
				// Storing data into database
				// $id          = mysqli_real_escape_string($db_connection, $google_account_info->id);
				// $full_name   = mysqli_real_escape_string($db_connection, trim($google_account_info->name));
				// $email       = mysqli_real_escape_string($db_connection, $google_account_info->email);
				// $profile_pic = mysqli_real_escape_string($db_connection, $google_account_info->picture);
				// // checking user already exists or not
				// $get_user = mysqli_query($db_connection, "SELECT `google_id` FROM `users` WHERE `google_id`='$id'");
				// if(mysqli_num_rows($get_user) > 0) {
				// 	$_SESSION['login_id'] = $id;
				// 	header('Location: home.php');
				// 	exit;
				// } else {
					// if user not exists we will insert the user
					// $insert = mysqli_query($db_connection, "INSERT INTO `users`(`google_id`,`name`,`email`,`profile_image`) VALUES('$id','$full_name','$email','$profile_pic')");
				
		// 			if($insert) {
		// 				$_SESSION['login_id'] = $id;
		// 				header('Location: home.php');
		// 				exit;
		// 			} else {
		// 				echo "Sign up failed!(Something went wrong).";
		// 			}
		// 		// }
		// 	} else {
		// 		header('Location: /login');
		// 		exit;
		// 	}
		// }
		// else{
		// 	// Google Login Url = $client->createAuthUrl();
		// }
		
		
		// if($_SERVER['REQUEST_METHOD'] == "POST")
		// {
		// 	//Create a new User object to be used in the App
		// 	$user = new User;
		//
		// 	//TODO: Create function to take in both email or username
		//
		// 	//TODO: Connect Social Media APis
		//
		// 	//Retrieve the (email, password) from frontend
		// 	// $arr['email'] = $_POST['email'];
		//
		// 	//Retrieve username
		// 	$arr['username'] = $_POST['username'];
		//
		//
		// 	//Check database
		// 	$row = $user->first($arr);
		//
		// 	//If data is returned
		// 	if($row)
		// 	{
		// 		//Check if passwords match
		// 		//TODO : Salt password, beef up security
		// 		if($row->password === $_POST['password'])
		// 		{
		// 			//Set the session user per the data returned from DB
		// 			$_SESSION['USER'] = $row;
		// 			redirect('home'); // Redirect home
		// 		}
		// 	}
		// 	//If any errors
		// 	$user->errors['email'] = "Wrong email or password";
		//
		// 	$data['errors'] = $user->errors;
		// }
		//Set view back to login, since errors
		
		$data = [
			'client' => $client
		];
		$this->view('login',$data);
	}

	
	public function google(): void {
	
	
	}
	
}
