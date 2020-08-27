 <?php 


                            include '../connection.php';
                            $id=$_POST['id'];
                            echo $user_id;
                            $status=$_POST['online_status'];
                              echo $status;
                          
                            $sqll="select * from online_shoping where id='$id'";

                      
                            
                             $result = $conn->query($sqll);
                             if ($result->num_rows > 0 ) 
                             {
                                    while($row = $result->fetch_assoc()) 
                                    {

                                       $s="update online_shoping set status='$status' where id='$id'";
                                                      if($conn->query($s)==TRUE)
                                                      {
                                                         echo "successfull";

                                                          echo "
                                                            <script>
                                                          window.open('online_shop.php','_self')
                                                          </script>
                                                        ";
                                                      }
                                    }
                             }
                                                    

                                     ?>