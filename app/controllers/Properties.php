<?php
  class Properties extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->propertyModel = $this->model('Property');
      
    }



  public function index($ref_id){
      $post = $this->testModel->getPropertyByRef($ref_id);
      

      $data = [
        'post' => $post,
        
      ];

      $this->view('propertys/index', $data);
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