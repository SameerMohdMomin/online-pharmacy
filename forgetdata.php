<?php


session_start();
include 'connection.php';
  
         $email=$_POST['email'];
         $password=$_POST['password'];

         $sql="
                  UPDATE user
                      SET password='$password'
                      WHERE email='$email';


         " ;
         
          if($conn->query($sql)==TRUE){
           echo "<script> alert('Password Updated !!!'); </script>";
            header('location:login.html');
          }

          else{
            echo "<script> alert('Error!!!'); </script>";
          }




?>