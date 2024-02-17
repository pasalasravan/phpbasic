<?php 
$connection = mysqli_connect('localhost','root','','loginapp');

if($connection){
    echo "we are connected";

}
else{
    die ("we are not connected");
}
?>