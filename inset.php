<?php 
$connection = mysqli_connect('localhost','root','','loginapp');



$query="INSERT INtO users(username,password,mobile)VALUES('sravan','sravan@25',7093306361)";

$result=mysqli_query($connection,$query);
if(!$result){
    die("Query Failed".mysqli_error());
}else{
    echo "query created succesfully";
}

?>