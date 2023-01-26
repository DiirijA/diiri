<?php 
$con= Mysqli_connect('localhost','root','','trytest');
if(!$con){
    die(mysqli_error($con));
}







// database connection code 
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
// $con = mysqli_connect('localhost', 'root','','trytest'); 
// // get the post records 
// $name = $_POST['name']; 
// $email = $_POST['email']; 
// $phone = $_POST['phone']; 
// $message = $_POST['message']; 
// // database insert SQL code
//  $sql = "INSERT INTO `tbl_contact` (`Id`, `name`, `email`, `phone`, `message`) 
//  VALUES ('0', '$name', '$email', '$phone', '$message')"; 
// // insert in database 
// $rs = mysqli_query($con, $sql); 
// if($rs) { echo "Contact Records Inserted"; } 


?>