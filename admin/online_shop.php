<?php 

  session_start();

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

         <title>Pharma | Orders</title>

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
                                
                                <li style="margin-right: 40px;"><button class="btn" href="#online" id="online_shopping">Online Shopping</button></li>
                                <li><button class="btn" href="#status" id="status_op">Status</button></li>
                                
                            </ul>
                        </div>
                    </div>
                </nav>



           <div class="container-fluid" id="online" style="display: none;">
            <table>
                <thead>
                            
                            <td>Customer Name</td>
                            <td>Product Name</td>
                            <td>Quantity</td>
                            <td>Total Price</td>
                            <td>Order id</td>
                 

                </thead>

                        

                <tbody>


                  <?php 
                              include '../connection.php';
                                if ($conn->connect_error) 
                                {
                                  die("Connection failed: " . $conn->connect_error);
                                }
                                else{

            
                                $sql="select * from cart where status='purches'";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){

                                     while($row = $result->fetch_assoc()) 
                                    {
                                        $cus_id=$row['user_id'];
                                        $product_id=$row['Product_id'];
                                    ?>

                                    <tr>
                                        <td>
                                                <?php       
                                                            $sql1="select * from user where user_id=$cus_id";
                                                            $result1 = $conn->query($sql1);
                                                            if($result1->num_rows ==1 ){
                                                            $row1 = $result1->fetch_assoc();
                                                            echo $row1['name'];
                                                        }
                                                        else{
                                                            echo "error";
                                                        }


                                                ?>


                                        </td>

                                        <td>
                                                 <?php
                                                        $sql2="select * from product where Product_id=$product_id";
                                                        $result2 = $conn->query($sql2);
                                                        if($result2->num_rows == 1 ){
                                                        $row2 = $result2->fetch_assoc();
                                                        echo $row2['name'];
                                                    }
                                                    else{
                                                        echo "error";
                                                    }

                                                 ?>
                                        </td>
                                        <td><?php echo $row['quantity']; ?></td>
                                        <td><?php echo $row['tprice']; ?></td>

                                        <td>

                                                  <?php       
                                                            $sql4="select * from online_shoping where user_id=$cus_id";
                                                            $result4 = $conn->query($sql4);
                                                            if($result4->num_rows ==1 ){
                                                            $row4 = $result4->fetch_assoc();
                                                            echo $row4['id'];
                                                        }
                                                        else{
                                                            echo "error";
                                                        }


                                                ?>


                                  
                                            
                                        </td>
                                      
                                    </tr>
               <?php




                                    
                                }
                                
                            }
                        }
                            ?>
                                    

                
                  
                                  
                      
                </tbody>
                        
                
                    </table>
                    
            
        </div>   















     <div class="container-fluid" id="status" style="display: none;">
            <table>
                <thead>
                            
                            <td>Customer Name</td>
                            <td>Product Name</td>
                            <td>Status</td>
                          
                 

                </thead>

                        

                <tbody>


                    <?php 
                              include '../connection.php';
                                if ($conn->connect_error) 
                                {
                                  die("Connection failed: " . $conn->connect_error);
                                }
                                else{
               
                                $sql="select * from cart where status='purches'";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                     while($row = $result->fetch_assoc()) 
                                    {
                                        $cus_id=$row['user_id'];
                                        $product_id=$row['Product_id'];
                                    ?>

                                    <tr>
                                        <td>
                                                <?php 
                                                            $sql1="select * from user where user_id=$cus_id";
                                                            $result1 = $conn->query($sql1);
                                                            if($result1->num_rows ==1 )
                                                            {
                                                            $row1 = $result1->fetch_assoc();
                                                            echo $row1['name'];
                                                        }
                                                            else{
                                                            echo "error";
                                                        }


                                                ?>


                                        </td>

                                        <td>
                                                 <?php
                                                        $sql2="select * from product where Product_id=$product_id";
                                                        $result2 = $conn->query($sql2);
                                                        if($result2->num_rows == 1 ){
                                                        $row2 = $result2->fetch_assoc();
                                                        echo $row2['name'];
                                                    }
                                                    else{
                                                        echo "error";
                                                    }

                                                 ?>
                                        </td>
                                     

                                       
                                        <td>
                                             <?php       
                                                            $sql4="select * from online_shoping where user_id=$cus_id";
                                                            $result4 = $conn->query($sql4);
                                                            if($result4->num_rows ==1 ){
                                                            $row4 = $result4->fetch_assoc();
                                                             $id=$row4['id'];
                                                        }
                                                        

                                                ?>
                                            <form action="status.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <select name="online_status">
                                                    <option value="packed">packed</option>
                                                    <option value="dispatched">dispatched</option>
                                                    <option value="out_of_order">out of order</option>
                                                    <option value="Delivery">Delivery</option>
                                                    

                                                </select>
                                                <input type="submit" class="btn" name="submit">
                                            </form>

                                            </td>
                                        
                                      
                                    </tr>
               <?php




                                    }
                                }
                                else{
                                    echo "error";
                                }
                            }
                            ?>
                                    

                
                  
                                  
                      
                </tbody>
                        
                
                    </table>
                    
            
        </div>









            </div>


</div>



<!-- Button trigger modal -->


























        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      
    </body>
</html>



<script>
  $(document).ready(function(){
  $("#online_shopping").click(function(){
    $("#online").css({"display":"block"});
    $("#status").css({"display":"none"});
  });
});

$(document).ready(function(){
  $("#status_op").click(function(){
    $("#status").css({"display":"block"});
    $("#online").css({"display":"none"});
  });
});
</script>


 <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#dis').css({"display":"none"});

            });

        });


    </script>

