// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $message =$_post['message'];

// //connect to the databass 

// $conn=new mysql('localhost','root','','trytest');
// if($conn-> connect_error){
//     die('connection Failed :' .$conn->connect_error);
// }else{
//     $stmt= $conn->prepare("insert into try(name, email, phone, message)" values(?,?,?,?));
// $stmt->bind_param("ssis",$name, $email, $phone, $message);
// $stmt->execute();
// echo "thank u";
// $stmt->close();
// $conn->close();
// }


<? php 
$conn= mysqli_connect('localhost','root','','trytest');
if($conn){
    echo "connected successfully";
    
}
else
    echo "failed successfully";
    mysqli_close();

    