

<?php

  include '../connection.php';
        if ($conn->connect_error) 
        {
          die("Connection failed: " . $conn->connect_error);
        }
        else
        {
              $username=$_POST['email'];
              $password=$_POST['password'];
              $sql="select * from admin where user_name='$username' && password='$password'";
               $result = $conn->query($sql);
                if ($result->num_rows == 1) 
                {

                        echo "
                        <script>
                        window.open('dash.html','_self')
                        </script>
                      ";


                }
                else{
                	echo "error";
                }
          }




?>
