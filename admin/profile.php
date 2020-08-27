
<?php

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
    
   

         $sql="  UPDATE admin
                      SET photo='$path'
                      WHERE admin_id='1';
           " ;

    if ($conn->query($sql) === TRUE) 
    {
        echo "New record created successfully";

        echo "
        <script>
        window.open('dash.php','_self')
        </script>
      ";
    }
    else 
    {
        echo "Error: " . $query . "<br>" . $conn->error;
    } 
  }
  
}








?>

