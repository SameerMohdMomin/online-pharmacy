<?php


session_start();


include 'connection.php';
  
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$sql="update user set status='offline' where email='$email' , password='$password'";

if($conn->query($sql)==TRUE)
{
  echo "success";
}
else
{
	echo "error";
}

session_destroy();

header('location:index.php');









?>