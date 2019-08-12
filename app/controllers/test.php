<?php
  class Searches extends Controller {
    public function __construct(){

      $this->listingModel = $this->model('Listing');

     
    }

    
    public function index(){


      // Check for POST
     if(isset($_GET["location"])){
    
        // Process Form

        // Init Data
        $data = [           
          'location' => trim($_GET['location']), 
          'row_start' => $_GET['row_start'],
          'row_end' => $_GET['row_end'],
          'listing_num_rows' => '',
          'location_err' => '',
          'listing_search' => ''
        ];

        // Validate Email
        if(empty($data['location'])){
          $data['location_err'] = '';

        }

        // Make sure errors are empty
        if(empty($data['location_err'])){
          // Validate


          $location = $data['location'];
          $row_start = $data['row_start'];
          $row_end = $data['row_end'];

          $listing_search = $this->listingModel->searchListings($location, $row_start, $row_end);
          $listing_num_rows = $this->listingModel->getListingsNumRows($location);

          $data = [
            'listing_search' => $listing_search,
            'listing_num_rows' => $listing_num_rows,
            'location' => $location,
            'location_err' => ''
          ];

          $this->view('searches/index', $data);
          
                      
        }
          elseif ($data['location'] =="") {
           $this->view('searches/index', $data);
          flash('post_message', '<div class="notification warning closeable">
                <p><span>We are sorry, your "'.$data['location'].'" search did not match</span> </p>
                <a class="close" href="#"></a>
            </div>');
        }
        

        
      }
      // else{

      //   if(empty($location)){

      //     // Init Data
      //     $data = [   
      //       'listing_search' => '',
      //       'location' => '',
      //       'location_err' => ''
      //     ];

      //   }
      //   else{

      //     $listing_search = $this->listingModel->searchListings($location);
      //     // Init Data
      //     $data = [   
      //       'listing_search' => $listing_search,
      //       'location' => '',
      //       'location_err' => ''
      //     ];

      //   }       

      //   // Load View
      //   $this->view('search/index', $data);
      // }
      
    }

  }


