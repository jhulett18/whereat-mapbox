<?php
	
	/**
	 * Home Controller
	 *
	 * index
	 *      = Set sesstion username
	 *      - Set view
	 */
	class Home
	{
		use Controller;
		
		/**
		 * @return void
		 */
		public function index(): void {
			/*
			 * event-title
				time
				description
				category
				location
				tags
				price
			 * */
			// if($_SERVER['REQUEST_METHOD'] == "POST" and $_POST['create_event'])
			// {
			//
			// 	$event = new Event;
			//
			// 	if($event->validate($_POST))
			// 	{
			// 		$event->insert($_POST);
			// 		// redirect('home');
			// 	}
			//
			// 	$data['errors'] = $event->errors;
			//
			// }
			if(isset($_POST['ok'])) {
				show("hello");
			}
			
			
			
			//Set session username
			$data['username'] = empty($_SESSION['USER']) ?
				'User': $_SESSION['USER']->username;
			
			// $event = new Event;
			// $data['locations'] = $event->findAll();
			
			
			//Set View
			$this->view('home', $data);
		}
		
		/**
		 * @return string
		 */
		public function create_event(): void {
			// show($_GET['url']);
			$data['username'] = empty($_SESSION['USER']) ?
				'User': $_SESSION['USER']->username;
			
			// return "hello";
			$_POST['_id_host'] = $_SESSION['USER']->_id;
			// show($_POST);
			
			//Capture POST
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$event = new Event;
				// create an event, populate details
				$id = $event->insert($_POST);
				$data['event'] = $id;
			}
			
			
			$this->view('home', $data);
		}
	
		
		public function privacy_policy(): void {
			$data = [];
			
			//Set View
			$this->view('privacy', $data);
		}
		
	}