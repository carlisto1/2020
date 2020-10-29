<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "college");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id=$_POST['id'];
$full_name=$_POST['full_name'];
$pass=$_POST['pass'];
$username=$_POST['username'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql ="UPDATE `student` SET full_name='$full_name',address='$address',phone='$phone',username='$username',pass='$pass' WHERE id='$id'";

  
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>