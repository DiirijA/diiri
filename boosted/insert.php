<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message']; 
    $phone = $_POST['phone']; 
     

   $stmt = $con->prepare("INSERT INTO try (name, email, message, phone) VALUES(?,?,?,?)");

   $stmt->bind_param("sssss",$name,$email,$message,$phone);
   $stmt->execute();
   $stmt->close();

   header('location:potf1.html');
   exit();

}
?>