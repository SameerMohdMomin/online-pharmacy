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
		
		$title = $_POST['name'];
		
		$discription=$_POST['discription'];

		$category=$_POST['category'];
		

		$query="insert into blog (title,discription,path,category) values('$title','$discription','$path','$category')";

		if ($conn->query($query) === TRUE) 
		{
    		echo "New record created successfully";

    		echo "
    			<script>
				window.open('blogs.php','_self')
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

