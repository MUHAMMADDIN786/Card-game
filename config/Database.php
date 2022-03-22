<?php 
  class Database {
    // DB Params
    private $host = 'ec2-44-194-92-192.compute-1.amazonaws.com';
    private $db_name = 'dfegk3gmfbhql0';
    private $username = 'dpckrgufahqgnb';
    private $password = 'b052b2877672c6b78c47fb442132e38a6b637474b065800f26bfd20a033e6134';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }