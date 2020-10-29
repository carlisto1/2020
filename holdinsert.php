<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['insert'])){
  $full_name=$_POST['full_name'];
  $address= $_POST['address'];
  $phone=$_POST['phone'];
  $username=$_POST['username'];
  $pass=$_POST['pass'];
 
$query= "INSERT INTO `student`(`full_name`, `address`, `phone`,`username`, `pass`) 
VALUES ('$full_name','$address', '$phone','$username','$pass')";

  

}
//$sql = "INSERT INTO `student`(`full_name`, `address`, `phone`,`username`, `pass`) 
//VALUES ('$full_name','$address', '$phone','$username','$pass')";


if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>