<?php
  class Pages extends Controller {
    public function __construct(){

      $this->listingModel = $this->model('Listing');
      $this->agentModel = $this->model('Agent');

     
    }

    
    public function index(){

        // $feat_pro = $this->listingModel->getFeaturedProperty();
        //  $pro_pictures = $this->listingModel->GetProertyPics();

              $data = [
            // 'feat_pro' => $feat_pro,
            //  'pro_pictures' => $pro_pictures
              ];
     
      $this->view('pages/index', $data);
    }


    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }



     public function contact(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/contact', $data);
    }





    public function rent(){

        $Rent ="Rent";

        $rent_pro = $this->listingModel->getRentProperty($Rent);
        $pro_pictures = $this->listingModel->GetProertyPics();

              $data = [
            'rent_pro' => $rent_pro,
            'pro_pictures' => $pro_pictures
              ];
     
      $this->view('pages/rent', $data);
    }




     public function sale(){

        $Sale ="Sale";

        $sale_pro = $this->listingModel->getRentProperty($Sale);
         $pro_pictures = $this->listingModel->GetProertyPics();

              $data = [
            'sale_pro' => $sale_pro,
            'pro_pictures' => $pro_pictures
              ];
     
      $this->view('pages/sale', $data);
    }



     public function agents(){

        $Agent ="Agent";

        $agent_list = $this->agentModel->getAgents($Agent);

              $data = [
            'agent_list' => $agent_list
              ];
     
      $this->view('pages/agents', $data);
    }



  }


