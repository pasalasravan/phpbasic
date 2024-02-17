<?php
$connection = mysqli_connect('localhost','root','','cybersecurity_section');

  if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connection -> connect_error;
  exit();

}else{
    echo "database created ";
}


class class_a{
  public $sectionname;
  public $teachername;
  public $studentcount;
  public $tablecount;
  public $blackboardcount;
  public $noofboys;
  public $noofgirls;
  
  function __construct($tablecount,$blackboardcount) {
    $this->blackboardcount = $tablecount;
    $this->tablecount =$blackboardcount;
  }
  
   function set($teachername,$sectionname,$studentcount, $noofboys,$noofgirls) {
    $this->teachername = $teachername;
     $this->sectionname = $sectionname;
     $this->studentcount = $studentcount;
       $this->noofboys = $noofboys;
         $this->noofgirls = $noofgirls;
  }
  
  function get() {
    echo $this->sectionname;
    echo "|";
    echo $this->teachername;
     echo "|";
    echo $this->studentcount;
     echo "boys:";
       echo $this->noofboys;
       echo "girls:";
       echo $this->noofgirls;
     echo "table: ";
        echo $this->tablecount;
          echo "blackboard :";
        echo $this->blackboardcount;
        echo "<br> ";
  }
  
  
  function __destruct() {
    echo "The section {$this->sectionname} created sucessfully";
  }
  
}

$branch_cyber_a  = new class_a(2,1);

$branch_cyber_a->set('pawan', ' A',76,38,38);

$branch_cyber_b = new class_a(3,2);

$branch_cyber_b->set('sravan', ' B',51,30,21);

$branch_cyber_c = new class_a(4,3);

$branch_cyber_c->set('manideep', ' c',52,30,22);

echo $branch_cyber_a->get();
echo $branch_cyber_b->get();
echo $branch_cyber_c->get();
echo $branch_cyber_a->teachername;
$query="INSERT INTO sections (sectionid,Teachername,studentcount,tablecount,blackboardcount,noofboys,noofgirls)
VALUES (1,$branch_cyber_a->teachername,$branch_cyber_a->studentcount,$branch_cyber_a->tablecount,$branch_cyber_a->blackboardcount,$branch_cyber_a->noofboys,$branch_cyber_a->noofgirls)";
$connection -> query($query);
?>