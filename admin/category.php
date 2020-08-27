




<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                               
                                <li><button class="btn" data-toggle="modal" data-target="#addimg">Add Category</button> </li>
                               
                        </div>
                    </div>
                </nav>

        <div class="container-fluid">
            <table>
                <thead>
                     
                            <td>Category Name</td>
                        
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
            
                                $sql="select * from category";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                     while($row = $result->fetch_assoc()) 
                                    {

                                        echo "
                                            <tr>
                                           
                                            <td>".$row['cat_name']."</td>
                                    
                                            <td>
                                                    <form action='category.php' method='post'>
                                                        <button type='submit' value='".$row['category_id']."' name='delete' class='btn btn-primary' data-toggle='modal' data-target='#deleteimg'>Delete</button>         
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
        <form method="POST" action="categorydata.php" enctype="multipart/form-data">
                          <div>
                            Category Name:<input class="form-control" type="text" name="name"> 
                          </div>

                          

                         

                          
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" name="submit" class="btn btn-primary" >upload</button>
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




<?php
 include '../connection.php';
        if ($conn->connect_error) 
        {
          die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            if (isset($_POST['delete'])) 
            {
                $id= $_POST['delete'];

                $sql = "DELETE FROM category WHERE category_id='$id' ";

                if ($conn->query($sql) === TRUE) 
                {
                    echo "<script>
                        alert('deleted');
                    </script>";
                    echo "
                        <script>
                            window.open('category.php','_self')
                        </script>
                    ";

                } 
                else
                {
                    echo "Error deleting record: " . $conn->error;
                }
            }
        }


?>


 <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#dis').css({"display":"none"});

            });

        });


    </script>