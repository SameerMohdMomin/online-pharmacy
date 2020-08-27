<?php
include 'connection.php';
        	if (isset($_POST['delete'])) 
        	{
        		$id= $_POST['delete'];

        		$sql = "DELETE FROM product WHERE Product_id='$id' ";

				if ($conn->query($sql) === TRUE) 
				{
    				echo "<script>
    					alert('deleted');
    				</script>";
    				echo "
    					<script>
    						window.open('admin.php','_self')
    					</script>
    				";

				}
				else
				{
    				echo "Error deleting record: " . $conn->error;
				}
        	}
        


?>