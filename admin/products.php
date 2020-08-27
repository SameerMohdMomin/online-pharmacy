

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Pharma | Products</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style4.css">

    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
           <nav id="sidebar">
                 <div class="sidebar-header" id="sidebarCollapse">
               <div id="dis"> <h3>Pharma Dashboard</h3></div>
                <img src="../photos/favicon1.png" width="100px" style="border-radius: 100px;">

                <strong>PD</strong>
            </div>

               
             <ul class="list-unstyled components">
                    <li>
                        <a href="dash.php" aria-expanded="false">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="products.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Add products
                        </a>
                    </li>
                    <li class="active">
                        <a href="customers.php">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Customers
                        </a>
                       
                    </li>
                    <li>
                        <a href="online_shop.php">
                            <i class="glyphicon glyphicon-send"></i>
                            Order
                        </a>
                    </li>
                    <li>
                        <a href="contact.php">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                    </li>
                    <li>
                    <a href="category.php">
                        <i class="fas fa-paper-plane"></i>
                        Add Category
                    </a>
                </li>
                 <li>
                    <a href="blogs.php">
                        <i class="fas fa-paper-plane"></i>
                        Add Blogs
                    </a>
                </li>
                 <li>
                    <a href="brand.php">
                        <i class="fas fa-paper-plane"></i>
                        Add Brands
                    </a>
                </li>
                <li>
                    <a href="coupan.php">
                        <i class="fas fa-paper-plane"></i>
                        Add Coupan
                    </a>
                </li>
                </ul>

                
            </nav>

            <!-- Page Content Holder -->
            <div id="content">


                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                               
                                <li><button data-toggle="modal" data-target="#addimg" class="btn">Add Product</button></li>
                                
                            </ul>
                        </div>
                    </div>
                </nav>

        <div class="container-fluid">
            <table>
                <thead>
                     
                            <td>Product name</td>
                            <td>Description</td>
                           
                            <td>Category</td>
                             <td>Price</td>
                            <td>Delete</td>
                 

                </thead>

                        

                <tbody>


                    <?php 
                              include '../connection.php';
                                if ($conn->connect_error) 
                                {
                                  die("Connection failed: " . $conn->connect_error);
                                }
                                else{
            
                                $sql="select * from product";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                     while($row = $result->fetch_assoc()) 
                                    {

                                        echo "
                                            <tr>
                                            <td>".$row['name']."</td>
                                            <td>".$row['discription']."</td>
                                            <td>".$row['category']."</td>
                                            <td>".$row['price']."</td>
                                            <td>
                                                    <form action='delete.php' method='post'>
                                                        <button type='submit' value='".$row['Product_id']."' name='delete' class='btn' data-toggle='modal' data-target='#deleteimg'>Delete</button>         
                                                    </form>

                                            </td>
                                                    
                                            <tr>




                                        ";
                                    }
                                }
                            }
                            ?>
                                    

                
                  
                                  
                      
                </tbody>
                        
                
                    </table>
                    
            
        </div>
           
                    
        

            </div>
        </div>





<!-- MODEL -->

<div class="modal fade" id="addimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="getdata.php" enctype="multipart/form-data">
        <input class="form-control" type="file" name="image">

                          <div>
                            Name:<input class="form-control" type="text" name="name"> 
                          </div>
                          <div>
                            Real Price:<input class="form-control" type="text" name="r_price">
                          </div>
                          <div>
                            Price:<input class="form-control" type="text" name="price"> 
                          </div>

                           <div>
                            Discription:<input class="form-control" type="text" name="discription"> 
                          </div>


                          <div>
                           
                             <div class="btn-group">
                                 Brand:
                                <select class="form-control" name=brand>
                            <?php
                                 include '../connection.php';

                                                $sql4="select * from brand";
                                                $result4 = $conn->query($sql4);

                                                if ($result4->num_rows > 0) {
                                                    while($row4 = $result4->fetch_assoc()) 
                                                    {
                                                      ?>
                                             <option value="<?php echo $row4['brand'] ?>"><?php echo $row4['brand'] ?></option>

                                             <?php
                                            }
                                            }
                            ?>


                                
                                </select>
                              </div> 
                          </div>

                          <div>
                           
                              <div class="btn-group">
                                Category:
                                <select class="form-control" name=category>
                            <?php
                                 include './admin/connection.php';

                                                $sql3="select * from category";
                                                $result3 = $conn->query($sql3);

                                                if ($result3->num_rows > 0) {
                                                    while($row3 = $result3->fetch_assoc()) 
                                                    {
                                                      ?>
                                             <option value="<?php echo $row3['cat_name'] ?>"><?php echo $row3['cat_name'] ?></option>

                                             <?php
                                            }
                                            }
                            ?>


                                
                                </select>
                              </div>
                          </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit_image" value="Upload" class="btn btn-primary">upload</button>
        </form>  
      </div>      
    </div>
  </div>
</div>

          






        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
         
    </body>
</html>


 <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#dis').css({"display":"none"});

            });

        });


    </script>