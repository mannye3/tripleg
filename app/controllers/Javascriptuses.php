<?php

class Javascriptuses extends Controller {
	public function __construct(){
		$this->listingModel = $this->model('Listing');
		$this->utilityModel = $this->model('Utility');
		// $this->tripModel = $this->model('Trip');
	}

	
	// Utility Section /////////////////////////////////////////////////////

	public function statelga(){
			
		$statelgas = $this->utilityModel->getStateLga();

		$data = [
			'statelgas' => $statelgas
		];

		$this->view('javascriptuses/statelga', $data);

	}


	

	public function getlga($state){
			
		$lgas = $this->utilityModel->getLga($state);

		$data = [
			'lgas' => $lgas
		];

		$this->view('javascriptuses/getlga', $data);

	}


	// public function state(){
			
	// 	$load_state = $this->utilityModel->getState();
		

	// 	$data = [
	// 		'load_state' => $load_state
			
	// 	];

	// 	$this->view('javascriptuses/state', $data);

	// }


	// public function getlga($state_id){
			
	// 	$lgas = $this->utilityModel->getLga($state_id);

	// 	$data = [
	// 		'lgas' => $lgas
	// 	];

	// 	$this->view('javascriptuses/state', $data);

	// }



	//Listing Section ///////////////////////////////////////////////////

	public function getslidecount($ref_id){
			
		$slide_count = $this->listingModel->getPropertyPictureSlideCount($_SESSION['user_email'], $ref_id);

		$data = [
			'slide_count' => $slide_count
		];

		$this->view('javascriptuses/getslidecount', $data);

	}

	// Map Section ///////////////////////////////////////////////////

	public function getmapdata($location){
			
		$map_info = $this->listingModel->searchListings($location);

		$data = [
			'map_info' => $map_info
		];

		$this->view('javascriptuses/getmapdata', $data);

	}

	// Trip Section /////////////////////////////////////////////////////

	public function triproute(){
			
		$triproutes = $this->tripModel->getTripStates();

		$data = [
			'triproutes' => $triproutes
		];

		$this->view('javascriptuses/triproute', $data);

	}

	public function selectedtriproute($state){
			
		$selectedtriproutes = $this->tripModel->getTripRoutes($state);

		$data = [
			'selectedtriproutes' => $selectedtriproutes
		];

		$this->view('javascriptuses/selectedtriproute', $data);

	}

	public function gettripunconfirmed($email){
			
		$trips_unconfirmed = $this->tripModel->getTripsUnconfirmed($email);

		$data = [
			'trips_unconfirmed' => $trips_unconfirmed
		];

		$this->view('javascriptuses/gettripunconfirmed', $data);

	}

	public function gettripconfirmed($email){
			
		$trips_confirmed = $this->tripModel->getTripsConfirmed($email);

		$data = [
			'trips_confirmed' => $trips_confirmed
		];

		$this->view('javascriptuses/gettripconfirmed', $data);

	}

	public function getavailableseat($id){
		

		$data = [
			'trip_info' => '',
			'seats_sold_info' => '',
			'seats_available' => ''
		];

		$trip_info = $this->tripModel->getTripInfo($id);

		$data['trip_info'] = $trip_info;


		$seats_sold_info = $this->tripModel->getSeatsSold($data['trip_info']->email,$data['trip_info']->tripfrom,$data['trip_info']->tripto,$data['trip_info']->tripdate,$data['trip_info']->triptime);
		//$seats_sold_info = $this->tripModel->getSeatsSold($trip_info['email'],$trip_info['tripfrom'],$trip_info['tripto'],$trip_info['tripdate'],$trip_info['triptime']);

		$data['seats_sold_info'] = $seats_sold_info;

		
		$seats_available = intval($data['trip_info']->capacity) - intval($data['seats_sold_info']->seats_sold);
		/*$seats_available = intval($trip_info['capacity']) - intval($data['seats_sold_info']->seats_sold);*/

		$data['seats_available'] = $seats_available;

		$this->view('javascriptuses/getavailableseat', $data);

	}

	public function getunpaidtrip($email){
			
		$trips_unpaid = $this->tripModel->getUnpaidTrips($email);

		$data = [
			'trips_unpaid' => $trips_unpaid
		];

		$this->view('javascriptuses/getunpaidtrip', $data);

	}

		
}

?>