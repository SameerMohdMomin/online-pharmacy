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

     

   
        
        $name = $_POST['name'];
        
    

        $query="insert into category (cat_name) values('$name')";

        if ($conn->query($query) === TRUE) 
        {
            echo "New record created successfully";

            echo "
                <script>
                window.open('category.php','_self')
                </script>
            ";
        }
        else 
        {
            echo "Error: " . $query . "<br>" . $conn->error;
        }   
    
    
}







// echo "
//      <img src='images/ ".$_FILES['image']['name']."    '>
// ";

        

?>

