<?php
  class Listings extends Controller {
    public function __construct(){
     

      $this->listingModel = $this->model('Listing');
      
    }



  public function index($ref_id){

         
      $data = [
        'post' => '',
         'pro_pics' => '',
         'feat_pro' => ''
         // 'view_pro' => $view_pro
        
      ];

      
      $data['post'] = $this->listingModel->getPropertyByRef($ref_id);
      $view = intval($data['post']->view) + 1;
      $view_pro = $this->listingModel->updateViewPro($ref_id,$view);

      $data['pro_pics'] = $this->listingModel->getPropertyPictures($ref_id);
      $data['feat_pro'] = $this->listingModel->getFeaturedProperty();
      
      


      $this->view('listings/index', $data);
    }









   // public function index(){
   //    // Get posts
   //    $posts = $this->testModel->getPosts();

   //    $data = [
   //      'posts' => $posts
   //    ];

   //    $this->view('tests/index', $data);
   //  }

    // public function index(){
    //       $data = [
    //         'title' => 'eddcjv n vjd ovdfvjdfvdfvdfoc',
    //         'description' => 'Simple social network built on the TraversyMVC PHP framework'
    //       ];
         
    //       $this->view('tests/index', $data);
    //     }
  
  }