<?php
  class Accounts extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->accountModel = $this->model('Account');
      $this->listingModel = $this->model('listing');
      $this->utilityModel = $this->model('Utility');
    }

      public function index(){
      // Get User Properties
     $data = [
        
      ];

      $this->view('accounts/index', $data);
    }



      public function edit_profile(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
            $data =[
              'id' => trim($_POST['id']),
              'name' => trim($_POST['name']),
              'phone' => trim($_POST['phone']),
              'name_err' => '',
              'phone_err' => '',
            ];

            

            // Validate Email
            if(empty($data['name'])){
              $data['name_err'] = 'Pleae enter name';
            } else {
    
            }

            // Validate Phone
            if(empty($data['phone'])){
              $data['phone_err'] = 'Pleae enter phone';
            } else {
            }

        

            // Make sure errors are empty
            if(empty($data['name_err']) && empty($data['phone_err'])){
              // Validated
              
          // Validated
          if($this->accountModel->updateUser($data)){

            $_SESSION['user_name'] = $data['name'];
            $_SESSION['user_phone'] = $data['phone'];
            
            flash('post_message', 'Post Updated');
            redirect('accounts');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('accounts/edit_profile', $data);
        }

      } else {
      

        $data =[
              'name' => '',
              'email' => '',
              'phone' => '',
              'name_err' => '',
              'phone_err' => ''
            ];
  
        $this->view('accounts/edit_profile', $data);
      }
    }




    public function profile_pic(){

           // ini_set('display_errors', '0');         # don't show any errors...
           //  error_reporting(E_ALL | E_STRICT);

           if($_FILES["file"]["name"] != '')
            {
            $target_dir = PROFILE_PIC_ROOT_PATH;
            $RandomNum = time();
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $filename = explode('.', $_FILES["file"]["name"]);
            $picname = end($filename);
            $new_name = rand(100, 999) . '.' . $picname;
            $ImageName = str_replace(' ','-',strtolower($new_name));
            $ImageType = $_FILES['file']['type']; //"file/png", file/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            $ret[$NewImageName]= $target_dir.$NewImageName;
            move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."/".$NewImageName );
            $data = array(
            'image' => $NewImageName,
            'id' => $_SESSION['user_id']
            );
            $this->accountModel->addProfilePicture($data);
             $_SESSION['user_image'] = $data['image'];
             
            // echo "file Uploaded Successfully";
            
           // $this->view('accounts/index', $data);
            }
         redirect('accounts');
            }
        



    
      
      public function submit_property(){
      
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $serial1 = (rand(100, 999)%10000);
            $serial2 = (rand(100, 999)%10000);
            $serial3 = (rand(100, 999)%10000); 
              
            $GenPin = $serial1.$serial2.$serial3;
            
            $GenPin = str_pad($GenPin, 9, '0', STR_PAD_LEFT);

            $_SESSION['ref_id'] = 'PR' . $GenPin;


            $data = [
              'title' => trim($_POST['title']),
              'type' => trim($_POST['type']),
              'purpose' => trim($_POST['purpose']),
              'price' => trim($_POST['price']),
              'rooms' => trim($_POST['rooms']),
              'bathrooms' => trim($_POST['bathrooms']),
              'details' => trim($_POST['editor1']),
              'address' => trim($_POST['address']),
              'latitude' => trim($_POST['latitude']),
              'longitude' => trim($_POST['longitude']),
              'state' => trim($_POST['state']),
              'lga' => trim($_POST['lga']),
              'fullname' => $_SESSION['user_name'],
              'email' => $_SESSION['user_email'],
              'user_phone' => $_SESSION['user_phone'],
              'upload_date' => date('jS \ F Y h:i:s A'),
              'ref_id' => $_SESSION['ref_id'],
              'title_err' => '',
              'address_err' => ''
            ];

            // Validate data
            if(empty($data['title'])){
              $data['title_err'] = 'Please enter property title';
            }
            if(empty($data['address'])){
              $data['address_err'] = 'Please enter property address';
            }

            // Make sure no errors
            if(empty($data['title_err']) && empty($data['address_err'])){
              // Validated
              if($this->accountModel->addProperty($data)){
                flash('post_message', 'Property Added');
                redirect('accounts/add_pictures/'.$_SESSION['ref_id'].'');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
              $this->view('accounts/submit_property', $data);
            }

          } else {
            $load_state = $this->utilityModel->getState();
            $data = [
              'title' => '',
              'type' => '',
              'purpose' => '',
              'price' => '',
              'rooms' => '',
              'bathrooms' => '',
              'details' => '',
              'address' => '',
              'latitude' => '',
              'longitude' => '',
              'state' => '',
              'lga' => '',
              'fullname' => '',
              'email' => '',
              'user_phone' => '',
              'upload_date' => '',
              'ref_id' => '',
              'load_state' => $load_state
            ];


    
      
            $this->view('accounts/submit_property', $data);
          }
        }



    
        

         public function add_pictures($ref_id){

           ini_set('display_errors', '0');         # don't show any errors...
            error_reporting(E_ALL | E_STRICT);
           if($_FILES["file"]["name"] != '')
            {
            $target_dir = PROPERTY_PIC_ROOT_PATH;
            $RandomNum = time();
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $filename = explode('.', $_FILES["file"]["name"]);
            $picname = end($filename);
            $new_name = rand(100, 999) . '.' . $picname;
            $ImageName = str_replace(' ','-',strtolower($new_name));
            $ImageType = $_FILES['file']['type']; //"file/png", file/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            $ret[$NewImageName]= $target_dir.$NewImageName;
            move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."/".$NewImageName );
            $data = array(
            'pic' => $NewImageName,
            'ref_id' => $_SESSION['ref_id'],
            'user_id' => $_SESSION['user_id'],
            'upload_date' => date('jS \ F Y h:i:s A')
            );
            $this->accountModel->addPropertyPictures($data);
            echo "file Uploaded Successfully";
            }
           $this->view('accounts/add_pictures');
            }
        
  


              





           public function my_properties(){
               $my_listings = $this->accountModel->getMyListings($_SESSION['user_email']);

              $data = [
            'my_listings' => $my_listings
              ];

                $this->view('accounts/my_properties', $data);
              }



     


          public function edit_property($ref_id){
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
              'ref_id' => $ref_id,
              'title' => trim($_POST['title']),
              'type' => trim($_POST['type']),
              'purpose' => trim($_POST['purpose']),
              'price' => trim($_POST['price']),
              'rooms' => trim($_POST['rooms']),
              'bathrooms' => trim($_POST['bathrooms']),
              'details' => trim($_POST['editor1']),
              'address' => trim($_POST['address']),
              'latitude' => trim($_POST['latitude']),
              'longitude' => trim($_POST['longitude']),
              'state' => trim($_POST['state']),
              'lga' => trim($_POST['lga']),
              'title_err' => '',
              'address_err' => ''
            ];


            // Validate data
            if(empty($data['title'])){
              $data['title_err'] = 'Please enter title';
            }
           
            // Make sure no errors
            if(empty($data['title_err'])){
              // Validated
              if($this->listingModel->updateProperty($data)){
                flash('post_message', '<div class="notification success closeable">
                <p><span><b>Property Updated</b></span> </p>
                <a class="close" href="#"></a>
            </div>');
            
                redirect('accounts/my_properties');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
              $this->view('accounts/edit_property', $data);
            }

          } else {
            // Get existing post from model
             $pro_info = $this->listingModel->getPropertyByRef($ref_id);

            // Check for owner
            if($pro_info->user_id != $_SESSION['user_id']){
              redirect('accounts');
            }

            $data = [
            'pro_info' => $pro_info,
            
          ];

      
            $this->view('accounts/edit_property', $data);
          }
        }



    //       public function feat_picture(){

    

    //   $this->view('accounts/feat_picture', $data);

    // }

        public function feat_picture($ref_id){
              $_SESSION['ref_id'] = $ref_id; 
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
              
              'ref_id' => trim($_POST['ref_id']),
              'pic' => trim($_POST['pic']),
              
              'pic_err' => ''
              
            ];

            // Validate data
            if(empty($data['pic'])){
              $data['pic_err'] = 'Please enter title';
            }
           
            // Make sure no errors
            if(empty($data['pic_err'])){
              
              // Validated
              if($this->listingModel->UpdatePropertyPic($data)){
                flash('post_message', '<div class="notification success closeable">
                <p><span><b>Property Picture Updated</b></span> </p>
                <a class="close" href="#"></a>
            </div>');
            
                
                
                redirect('accounts/my_properties');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
              $this->view('accounts/feat_picture', $data);
            }

          } else {
            // Get existing post from model
            $pro_img = $this->listingModel->getPropertyImg($_SESSION['user_id'], 
             $_SESSION['ref_id']);

            $data = [
            'pro_img' => $pro_img,
            
          ];

      
            $this->view('accounts/feat_picture', $data);
          }
        }





          public function delete_property($ref_id){
            
              // Get existing post from model
             $pro_info = $this->listingModel->getPropertyByRef($ref_id);
            
              // Check for owner
              if($post->user_id != $_SESSION['user_id']){
                redirect('accounts');
              }

              if($this->listingModel->deleteProperty($ref_id)){
                flash('post_message', 'Post Removed');
                redirect('accounts/my_properties');
              } else {
                die('Something went wrong');
              }
              }
      


             public function delete_picture($id){
            
              // Get existing post from model
             $pro_info = $this->listingModel->getPictureByid($id);
            
              // Check for owner
              if($post->user_id != $_SESSION['user_id']){
                redirect('accounts');
              }

              if($this->listingModel->deletePicture($id)){
                flash('post_message', 'Post Removed');
                redirect('accounts/my_properties');
              } else {
                die('Something went wrong');
              }
              }
      

     
    


  }