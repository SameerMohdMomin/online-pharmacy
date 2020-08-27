<?php

// echo $_FILES['image']['name']."<br>";
// echo $_FILES['image']['size']."<br>";
// echo $_FILES['image']['type']."<br>";
// echo $_FILES['image']['tmp_name']."<br>";

include '../connection.php';

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "Connected successfully";	

	 

	if(move_uploaded_file( $_FILES['image']['tmp_name'] , "../photos/ ".$_FILES['image']['name']))
	{
		$path=$_FILES['image']['name'];
		
		$name = $_POST['name'];
		$price=$_POST['price'];
		$discription=$_POST['discription'];
		$category=$_POST['category'];
		$brand=$_POST['brand'];
		$r_price=$_POST['r_price'];

		$query="insert into product (path,name,price,discription,category,brand,r_price) values('$path','$name','$price','$discription','$category','$brand','$r_price')";

		if ($conn->query($query) === TRUE) 
		{
    		echo "New record created successfully";

    		echo "
    			<script>
				window.open('products.php','_self')
				</script>
			";
		}
		else 
		{
    		echo "Error: " . $query . "<br>" . $conn->error;
		}	
	}
	
}







// echo "
// 		<img src='images/ ".$_FILES['image']['name']."    '>
// ";

		

?>

