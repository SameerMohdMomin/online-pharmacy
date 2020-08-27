<?php


session_start();
include 'connection.php';
  
  


        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $s="select * from user where name='$name'";
         $result = $conn->query($s);
          if ($result->num_rows == 1) 
          {
             echo "
              <script>
                    alert('Username Already taken');

                window.open('create.php','_self')
              
              </script>";
          }
          else{

 

             $query="insert into user (name,phone,email,password) values('$name','$phone','$email', '$password')";

             if($conn->query($query)===TRUE)
             {
              echo "<script> alert('Account Created Successfully'); </script>";
              echo "
                <script>
                window.open('login.html','_self')
                </script>
            ";
             }
             else
             {
                   echo "<script> alert('Something went wrong'); </script>";
             }
         }





?>



