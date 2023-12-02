<?php 

/**
 * signup class
 */
class Signup
{
	use Controller;
	
	/**
	 * Create user
	 * Check if email/username is unqiue
	 * @return void
	 */
	public function index(): void {
		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			//Create a new User
			$user = new User;
			
			//Check if user is valid
			if($user->validate($_POST))
			{
				$user->insert($_POST);
				redirect('login');
			}
			//If there are any errors, validate will return false with errors
			/*
			 * Should the check for unique usernames be done within validate?
			 *
			 *
			 * */
				$data['errors'] = $user->errors;
		}


		$this->view('signup',$data);
	}
	
	/**
	 * @return void
	 */
	public function individual(): void {
		$data = [];
		// show($_POST);
		//TODO: Prevent double registers
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			//Create a account for a single user
			$user = new User;
			//Check if user is valid
			if($user->validate($_POST))
			{
				$user->insert($_POST);
				// TODO:: Should auto signin and redirect to home
				redirect('home');
			}
			//If there are any errors, validate will return false with errors
			/*
			 * Should the check for unique usernames be done within validate?
			 *
			 *
			 * */
			$data['errors'] = $user->errors;
		}
		
		
		
		$this->view('individual/new-user-signup', $data);
	}
	
	/**
	 * @return void
	 */
	public function company(): void {
		
		//TODO: Prevent double registers 
		$data = [];
		// show($_POST);
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			//Create a account for a single user
			$user = new User;
			//Check if user is valid
			if($user->validate($_POST))
			{
				$user->insert($_POST);
				// TODO:: Should auto signin and redirect to home
				redirect('home');
			}
			//If there are any errors, validate will return false with errors
			/*
			 * Should the check for unique usernames be done within validate?
			 *
			 *
			 * */
			$data['errors'] = $user->errors;
		}
		
		
		$this->view('company-signup/company-signup', $data);
	}
	
}
