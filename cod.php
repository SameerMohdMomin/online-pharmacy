<?php

session_start();
include 'connection.php';
    echo "Connected successfully";  

     

         
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $address=$_POST['address'];
        $country=$_POST['country'];
        $zip=$_POST['zip'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];  
        $tprice=$_POST['tprice'];
        $user_id=$_POST['user_id'];   
        


        
        
    
        
    

        $query="insert into cod (f_name,l_name,address,country,zip,email,phone,tprice,user_id) values('$fname' , 'lname' , '$address' , '$country' , '$zip' ,  '$email' , '$phone' , '$tprice', '$user_id')";

        if ($conn->query($query) === TRUE) 
        {
            echo "New record created successfully";

                echo "
                    <script>
                    window.open('thankyou.php','_self')
                    </script>
                ";
        }
        else 
        {
            echo "Error: " . $query . "<br>" . $conn->error;
        }   
    
    







// echo "
//      <img src='images/ ".$_FILES['image']['name']."    '>
// ";

        

?>

