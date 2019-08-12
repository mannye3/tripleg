<?php
  class Account {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }




      


      public function updateUser($data){
      $this->db->query('UPDATE users SET name = :name, phone = :phone  WHERE id = :id');
      // Bind values
      $this->db->bind(':id',  $data['id']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':phone', $data['phone']);
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



       // Update 
    public function addProfilePicture($data){
      
      $this->db->query('UPDATE users SET image = :image  WHERE id = :id');
      // Bind Values      
     
      $this->db->bind(':image', $data['image']);
       $this->db->bind(':id', $data['id']);
           

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }     
            
    }





      public function getMyListings($email){
      $this->db->query('SELECT * FROM property WHERE email = :email  ORDER BY id DESC');

      // Bind Values
      $this->db->bind(':email', $email);

      $results = $this->db->resultSet();

      return $results;
    }



    public function getMyPropertyByRef($ref_id){
      $this->db->query('SELECT * FROM property WHERE ref_id = :ref_id');
      $this->db->bind(':ref_id', $ref_id);

      $row = $this->db->single();

      return $row;
    }



    





    //Add New Properties
      public function addProperty($data){
      
      $this->db->query('INSERT INTO property (title, type, purpose, price, rooms, bathrooms, details, address, latitude, longitude, state, lga, fullname, email, phone, ref_id, upload_date, user_id) VALUES(:title, :type, :purpose, :price, :rooms, :bathrooms, :details, :address, :latitude, :longitude, :state, :lga, :fullname, :email, :phone, :ref_id, :upload_date, :user_id)');
    
      // Bind Values      
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':type', $data['type']);
      $this->db->bind(':purpose', $data['purpose']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':rooms', $data['rooms']);
      $this->db->bind(':bathrooms', $data['bathrooms']);
      $this->db->bind(':details', $data['details']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':latitude', $data['latitude']);
      $this->db->bind(':longitude', $data['longitude']);
      $this->db->bind(':state', $data['state']);
      $this->db->bind(':lga', $data['lga']);
      $this->db->bind(':fullname', $data['fullname']);
      $this->db->bind(':email', $_SESSION['user_email']);
      $this->db->bind(':phone', $_SESSION['user_phone']);
      $this->db->bind(':ref_id', $data['ref_id']);
      $this->db->bind(':upload_date', $data['upload_date']); 
      $this->db->bind(':user_id', $_SESSION['user_id']);
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




    // Update 
    public function addPropertyPictures($data){
      
      $this->db->query('INSERT INTO pro_img  (pic, ref_id, user_id, upload_date) VALUES(:pic, :ref_id, :user_id, :upload_date)');
      // Bind Values      
     
      $this->db->bind(':pic', $data['pic']);
      $this->db->bind(':ref_id', $data['ref_id']);
      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':upload_date', $data['upload_date']);
            

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }     
            
    }




   

    // public function addPost($data){
    //   $this->db->query('INSERT INTO posts (title, user_id, body) VALUES(:title, :user_id, :body)');
    //   // Bind values
    //   $this->db->bind(':title', $data['title']);
    //   $this->db->bind(':user_id', $data['user_id']);
    //   $this->db->bind(':body', $data['body']);

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }

    // public function updatePost($data){
    //   $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
    //   // Bind values
    //   $this->db->bind(':id', $data['id']);
    //   $this->db->bind(':title', $data['title']);
    //   $this->db->bind(':body', $data['body']);

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }

    // public function getPostById($id){
    //   $this->db->query('SELECT * FROM posts WHERE id = :id');
    //   $this->db->bind(':id', $id);

    //   $row = $this->db->single();

    //   return $row;
    // }

    // public function deletePost($id){
    //   $this->db->query('DELETE FROM posts WHERE id = :id');
    //   // Bind values
    //   $this->db->bind(':id', $id);

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }
  }