<?php


session_start();
include 'connection.php';
  if(isset($_POST['productid']))
  {

  	$Product_id=$_POST['productid'];
  	$user_id=$_SESSION['user_id'];
    $quantity=$_POST['quantity'];
  	$price=$_SESSION['price'];

    $tprice=$price*$quantity;

  	$sql="insert into cart (Product_id,user_id,tprice,quantity,price) values('$Product_id','$user_id','$tprice',$quantity,'$price')";
  	if ($conn->query($sql) === TRUE) 
		{
    		echo "New record created successfully";
    		
    			echo "
    		<script>
				window.open('product.php','_self')
				</script>
			";
		

    		
		}
	else{
		echo "error";
	}
}


?>