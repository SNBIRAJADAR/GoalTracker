<?php
$user = 'root';
$password = '';
$db = 'goals';
$host = 'localhost';
// $port = 5000;

$link = mysqli_init();
//Connecting to the database
$con = $link->real_connect("localhost","root","","goals");

if($con){
   print("WELCOME");
}else{
   print("Connection Failed ");
}

?>
