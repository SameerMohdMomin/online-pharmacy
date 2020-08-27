<?php


session_start();
include 'connection.php';
  
            


       
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $s="select * from user where email='$email' && password='$password'";
         $result = $conn->query($s);
          if ($result->num_rows == 1) 
          {
              

              $sql="update user set status='online' where email='$email' , password='$password'";

                if($conn->query($sql)==TRUE)
                {
                  echo "success";
                }
                else
                {
                  echo "error";
                }


            $row = $result->fetch_assoc();
            $user_id=$row['user_id'];
            $name=$row['name'];
            $status=$row['status'];
            $email=$row['email'];
            $password=$row['password'];

            $_SESSION['email']=$email;
            $_SESSION['user_id']=$user_id;
            $_SESSION['password']=$password;
            $_SESSION['status']=$status;
            $_SESSION['username']=$name;
             echo "
                        <script>
                        window.open('index.php','_self')
                        </script>
                      ";
            
          }
          else
          {
            echo "
                        <script> alert('Username or Password is wrong'); </script>
                        <script>
                        window.open('login.html','_self')
                        </script>
                      ";
          }

         

?>