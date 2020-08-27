<?php


session_start();
include('../connection.php');
  
            


       
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $s="select * from user where email='$email' && password='$password'";
         $result = $conn->query($s);
          if ($result->num_rows == 1) 
          {
        
            $row = $result->fetch_assoc();
            $username=$row['username'];
            $password=$row['password'];

            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
             echo "
                        <script>
                        window.open('profile.php','_self')
                        </script>
                      ";
            
          }
          else
          {
            echo "
                        <script> alert('Username or Password is wrong'); </script>
                        <script>
                        window.open('index.php','_self')
                        </script>
                      ";
          }

         

?>