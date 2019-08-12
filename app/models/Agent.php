<?php
  class Agent {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }




     public function getAgents($Agent){
      $this->db->query('SELECT * FROM users WHERE type= :Agent ');

       $this->db->bind(':Agent', $Agent);
        
     $results = $this->db->resultSet();

      return $results;
    }


     public function getAgentById($id){
      $this->db->query('SELECT * FROM users WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }


}