<?php

                               include 'connection.php';
                                  if (isset($_POST['submit'])) {
                                        $user_id=$_POST['user_id'];
                                        $name=$_POST['name'];
                                        $email=$_POST['email'];
                                        $msg=$_POST['msg'];
                                        $purpose=$_POST['purpose'];

                                        $sql="insert into contact(user_id,name,email,msg,purpose) values('$user_id' , '$name' , '$email' , '$msg' , '$purpose')";
                                        if ($conn->query($sql) === TRUE) 
                                        {
                                          echo"

                                                <script>
                                                        alert('your query submited'); 
                                                        window.open('contact.php','_self');

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
  