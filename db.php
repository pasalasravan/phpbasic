<?php

class CybersecurityBranch {
    public $sectionid;
    public $sectionname;
    public $teacher;
    public $tablescount;
    public $blackboard;
    public $noofstudents;
    public $noofboys;
    public $noofgirls;

    public function __construct($sectionid, $sectionname, $teacher, $tablescount, $blackboard, $noofstudents, $noofboys, $noofgirls) {
        $this->sectionid = $sectionid;
        $this->sectionname = $sectionname;
        $this->teacher = $teacher;
        $this->tablescount = $tablescount;
        $this->blackboard = $blackboard;
        $this->noofstudents = $noofstudents;
        $this->noofboys = $noofboys;
        $this->noofgirls = $noofgirls;
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

        // SQL query to insert data into the database
        $sql = "INSERT INTO cybersecurity_branch (sectionid, sectionname, teacher, tablescount, blackboard, noofstudents, noofboys, noofgirls) 
                VALUES ('$this->sectionid', '$this->sectionname', '$this->teacher', '$this->tablescount', '$this->blackboard', '$this->noofstudents', '$this->noofboys', '$this->noofgirls')";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    }
}

// Example usage
$cybersecurityBranch = new CybersecurityBranch(1, 'A', 'John Doe', 20, 'Yes', 50, 25, 25);
$cybersecurityBranch->saveToDatabase();
?>