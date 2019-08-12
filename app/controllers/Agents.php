<?php
  class Agents extends Controller {
    public function __construct(){
     

      $this->agentModel = $this->model('Agent');
      $this->listingModel = $this->model('Listing');
      
    }




 public function index($id){

       
	  $agent_pro = $this->listingModel->getAgentProperty($id);
      $agent = $this->agentModel->getAgentById($id);
      $feat_pro = $this->listingModel->getFeaturedProperty();
       $pro_pictures = $this->listingModel->GetProertyPics();
      
      

      $data = [
        'agent' => $agent,
         'feat_pro' => $feat_pro,
          'agent_pro' => $agent_pro,
          'pro_pictures' => $pro_pictures
        
        
      ];

      $this->view('agents/index', $data);
    }




}