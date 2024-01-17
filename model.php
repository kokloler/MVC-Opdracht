<?php
class database {   
    public $name; 
    public $servername;
    public $username;
    public $password;
    public $dbname;

    // methodes
    function __construct($servername, $username, $password, $dbname) {
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
      $this->dbname = $dbname;
    }
    function make_connection() {
      $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        
      }
      echo "database connected";
      
     return $conn;
    }
  
   
   
  }

 


     



  ?>