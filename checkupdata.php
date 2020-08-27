<?php

                                  include 'connection.php';

                                  if (isset($_POST['submit'])) {
                                        $user_id=$_POST['user_id'];
                                        $name=$_POST['name'];
                                        $email=$_POST['email'];
                                        $pin=$_POST['pin'];
                                        $phone=$_POST['mobile'];
                                        $package=$_POST['purpose'];

                                        $sql="insert into checkup(user_id,name,email,pin,phone,package) values('$user_id' , '$name' , '$email' , '$pin' ,'$phone' ,'$package')";
                                        if ($conn->query($sql) === TRUE) 
                                        {
                                          echo"

                                                <script>
                                                        alert('your Appointment sumbited'); 
                                                        window.open('checkup.php','_self');

                                                </script>

                                            ";

                                           
                                             
                                        }
                                        else{
                                          echo "error";
                                        }

                                                                
                                  }
                                  else{
                                    echo "error";
                                  }
                                  
                                

                                





?>
  