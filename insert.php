<?php

class sections{
  public $sectionid;
  public $sectionname;
  public $Teachername;
  public $Studentcount;
  public $Tablecount;
  public $Blackboardcount;
  public $Noofboys;
  public $Noofgirls;
  
  public function __construct($sectionid,$sectionname,$Teachername,$Studentcount, $Tablecount,$Blackboardcount,$Noofboys,$Noofgirls) {
    $this-> sectionid =  $sectionid;
    $this-> sectionname = $sectionname;
    $this-> Teachername =$Teachername;
    $this-> Studentcount =$Studentcount;
    $this-> Tablecount = $Tablecount;
    $this-> Blackboardcount = $Blackboardcount;
    $this-> Noofboys = $Noofboys;
    $this-> Noofgirls = $Noofgirls;
  }
  public function saveToDatabase() {
    // Assuming you have a MySQL database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cybersecurity_section";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO sections (sectionid, sectionname, Teachername,Studentcount, Tablecount, blackboardcount, Noofboys, Noofgirls) 
          VALUES ('$this->sectionid', '$this->sectionname', '$this->Teachername', '$this->Studentcount','$this->Tablecount', '$this->Blackboardcount', '$this->Noofboys', '$this->Noofgirls')";
   
   if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();


  }

}

$sections = new sections(2, 'B', 'shiva', 60, 10, 2, 30, 30);
$sections->saveToDatabase();
?>