<?php
session_start();

include 'connection.php';
$price=$_POST['sum'];
$code=$_POST['code'];

$sql="select * from coupan";
  $result = $conn->query($sql);
      if($result->num_rows == 1){
           $row = $result->fetch_assoc(); 
           
              	 $coupan=$row['coupan'];
              	 $discount=$row['discount'];


              }


 if($code == $coupan)
 {
 	   $total=0;
 	   $discount=$discount/100;
 	   $total=$price-($discount * $price);
       $_SESSION['totaldis']=$total;

 	    echo "
 		  <script>
 		   alert('coupan applied sucessfully');
 		  window.open('checkout.php' ,'_self')
 		  </script>

 		  ";
    

 }
 else {
 	   echo "
 		  <script>
 		   alert('coupan code is not valid');
 		   window.open('checkout.php' ,'_self')
 		  </script>

 		  ";
 	 }












?>