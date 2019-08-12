<?php
	class Utility {
		private $db;

		public function __construct(){
			$this->db = new Database();
		}


		public function getStateLga(){
			$this->db->query('SELECT DISTINCT * FROM states');

			$results = $this->db->resultSet();

			return $results;
		}

		public function getLga($state){
			$this->db->query('SELECT lga FROM locals WHERE state = :state ORDER BY lga');

			// Bind Values
			$this->db->bind(':state', $state);

			$results = $this->db->resultSet();

			return $results;
		}



		// public function getState(){
		// 	$this->db->query('SELECT DISTINCT * FROM states');

		// 	$results = $this->db->resultSet();

		// 	return $results;
		// }



		// public function getLga($state_id){
		// 	$this->db->query('SELECT * FROM locals WHERE state_id = :state_id');

		// 	// Bind Values
		// 	$this->db->bind(':state_id', $state_id);

		// 	$results = $this->db->resultSet();

		// 	return $results;
		// }

		public function getCommission(){
			$this->db->query('SELECT lowamount,highamount,amount FROM commission');

			$results = $this->db->resultSet();

			return $results;
		}
	}
?>