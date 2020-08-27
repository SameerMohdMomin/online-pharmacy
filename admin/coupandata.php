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

	 

	
		
		
		$coupan = $_POST['coupan'];
		$discount = $_POST['discount'];
		
	

		$query="insert into coupan (coupan,discount) values('$coupan','$discount')";

		if ($conn->query($query) === TRUE) 
		{
    		echo "New record created successfully";

    		echo "
    			<script>
				window.open('coupan.php','_self')
				</script>
			";
		}
		else 
		{
    		echo "Error: " . $query . "<br>" . $conn->error;
		}	
	
	
}







// echo "
// 		<img src='images/ ".$_FILES['image']['name']."    '>
// ";

		

?>

