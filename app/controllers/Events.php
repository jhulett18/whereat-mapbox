<?php
	
	/**
	 * Event Controller
	 *
	 * index
	 */
	class Events
	{
		
		use Controller;
		
		/**
		 *
		 */
		
		//Note function returns void
		public function all(): void {
			if($_SERVER['REQUEST_METHOD'] == "GET") {
				$event = new Event;
				$all_events = $event->findAll();
				
				header('Content-type: application/json');
				echo json_encode($all_events);
			}
			
			
		}
		
		// public function index()
		// {
		// 	$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->username;
		//
		// 	$this->view('event', $data);
		// }
	}