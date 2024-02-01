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
      echo "<script> console.log('database cornected')</script>";
      
     return $conn;
    }
  
   
   
  }

  $model = new database ("localhost", "root", "", "faq"  );
  $conn = $model->make_connection();
 
 
 
             $sql = "SELECT vraag, antwoord FROM faq"; // Query om gegevens op te halen
 
             $result = mysqli_query($conn, $sql);
 
             if (mysqli_num_rows($result) > 0) {
                 while ($row = mysqli_fetch_assoc($result)) {
                     echo '<div class="faq">';
                     echo '<div class="faq-question">';
                     echo '<h2>' . $row['vraag'] . '</h2>';
                     echo '<i class="fas fa-chevron-down"></i>';
                     echo '</div>';
                     echo '<div class="faq-answer">';
                     echo '<p>' . $row['antwoord'] . '</p>';
                     echo '</div>';
                     echo '</div>'; 
                 }
             } else {
                 echo "<p>Geen vragen en antwoorden beschikbaar.</p>";
             }
 
             mysqli_close($conn);

     



  ?>