<?php
session_start();
$user_id=$_SESSION['user_id'];
include 'connection.php';
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
      	$address=$_POST['address'];
      	$state=$_POST['state'];
      	$zip=$_POST['zip'];
        $sum=$_POST['sum'];
        $date=$_POST['date'];
        $date1=$_POST['date1'];
        

        
         $s="insert into online_shoping (user_id,address,state,zip,name,email,phone,date,date1) values('$user_id' , '$address' , '$state' , '$zip' , '$name' , '$email', '$phone' ,'$date', '$date1')";
         if($conn->query($s)===TRUE)
          {
             echo "<script> alert('Your order successfully submited'); </script>";

          }
?>



