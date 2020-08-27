<?php


session_start();

include 'connection.php';

	if(isset($_POST['delete']))
	{
		$id= $_POST['delete'];
		

        		$sql = "DELETE FROM cart WHERE Product_id='$id' ";

				if ($conn->query($sql) == TRUE) 
				{
    				echo "<script>
    					alert('deleted');
    				</script>";
    
    		
			    	echo "
			    		   <script>
							window.open('cart.php','_self')
							</script>
						";
					

			    		
					}
				
	}
	


?>