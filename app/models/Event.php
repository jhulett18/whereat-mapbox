<?php
	
	class Event {
		/*
			 * event-title
				time
				description
				category
				location
				tags
				price
			 * */
		use Model;
		
		protected string $table = 'events';
		
		protected array $allowedColumns = [
			'_id_event',
			'_id_host',
			'title',
			// 'description',
			// 'category',
			'date_time',
			// 'time',
			'location',
			'tags',
			'price'
		];
		
		public function validate($data): bool {
			$this->errors = [];
			
			if(empty($data['event-title'])) {
				$this->errors['event-title'] = "Event title needed";
			}
			
			if(empty($data['description'])) {
				$this->errors['description'] = "Description is needed";
			}
			
			if(empty($this->errors)) {
				return TRUE;
			}
			
			return FALSE;
		}
		
	}