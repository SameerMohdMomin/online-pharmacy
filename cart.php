<?php
error_reporting(0);
session_start();
$user_id=$_SESSION['user_id'];
if(isset($_POST['productid'])){
  $productid=$_POST['productid'];
  echo $productid;
}




?>




<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharma | Cart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>

  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/header.css">



  

  

</head>
<body>


  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left" style="font-size: 30px;">
            <!-- logo -->
            <a href="index.php" class="site-logo" style="text-decoration: none; color: black;">
              Pharma
            </a>
          </div>
        


   <?php
                                  
                                  if($_SESSION['status'] == 'offline') 
                                  { 
                                      
                                        ?>
                                 <div class="d-flex offset-6 col-xl-3 col-lg-5 d-flex justify-content-end">
                                      <div class="dropdown mr-1">
                                        <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" style="background-color: #c4c1e0;">
                                          <i class="fas fa-user"></i>
                                        </button>
                                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">


                                                    <div class="shopping-card">
                                                     <i class="fas fa-shopping-bag"></i>
                                                      <span>
                                                          <?php
                                                          include 'connection.php';
                                                          $sq="select * from cart where user_id='$user_id'";
                                                          $sum=0;
                                                           $result = $conn->query($sq);
                                                                if ($result->num_rows > 0) {
                                                                    while($row = $result->fetch_assoc()) 
                                                                    {
                                                                      $s=$row['status'];
                                                                      $sum=$sum+1;
                                                                    }
                                                                  }
                                                                echo $sum;
                                                          ?>



                                                      </span>
                                                    </div>
                                                    <a href="cart.php" style="text-decoration: none; color: black;">Cart</a>
                                                     <div class="up-item">
                                                         <li class="fas fa-sign-out-alt" ></li>
                                                          <a href="logout.php" style="text-decoration: none; color: black;">Logout</a>
                                                        </div>
                                                  </div>
                                      
                                       
                                   </div>
                                </div>
                                   




                                   

                          <?php
                                   
                                  }
                                    
                           
                                   else
                                   {

                                    ?>
                                           

                                     <div class="col-xl-4 col-lg-5">
                                        <div class="user-panel">
                                          <div class="up-item">
                                            <i class="far fa-user"></i>
                                            <a href="login.html">Sign</a> In or <a href="create.php">Create Account</a>
                                          </div>
                                         
                                        </div>
                                    </div>
                            <?php
                                   }

                       
                         




          ?>
        



         










        </div>
      </div>
    </div>
    <nav class="main-navbar">
      <div class="container">
        <!-- menu -->
        <ul class="main-menu d-flex justify-content-around ">
          <li><a href="index.php">Home</a></li>
          <li><a href="product.php">Shop</a></li>
          <li><a href="blog.php">Blogs</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </nav> 
  </header>



<!-- MAIN   -->
<main>
     











 <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Cart</strong>
          </div>
        </div>
      </div>
    </div>




  <?php
         include 'connection.php';
            $user_id=$_SESSION['user_id'];
            $sql6="select * from cart where user_id=$user_id";


            
             $result6 = $conn->query($sql6);
             if ($result6->num_rows > 0 ) 
             {
                    


  ?>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" action="deletecart.php" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Product</th>
                    <th class="product-name">Name</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>







<?php 


            include 'connection.php';
            $user_id=$_SESSION['user_id'];
            $sqll="select * from cart where user_id=$user_id";


            
             $result = $conn->query($sqll);
             if ($result->num_rows > 0 ) 
             {
                    while($row = $result->fetch_assoc()) 
                    {
                          $quantity=$row['quantity'];
                          $productid=$row['Product_id'];
                          $tprice=$row['tprice'];
                        
                           $sql2="select * from product where Product_id=$productid";
                            $result1 = $conn->query($sql2);
                           if ($result1->num_rows == 1) 
                           {
                                $row = $result1->fetch_assoc();
                                $name=$row['name'];
                                $path=$row['path'];
                                $price=$row['price'];
                                $discription=$row['discription'];
                               
                                


?>

                    <tr>
                    <td class="product-thumbnail cart">
                      <img src="photos/ <?php echo $path ; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $name; ?> <input type="hidden" name="name" value="<?php echo $name; ?>" > </h2>
                    </td>
                    <td><?php echo $price; ?></td>
                    <td>
                           
                        <?php echo $quantity; ?>
                    

    
                    </td>
                    <td>Rs : <?php echo  $price*$quantity; ?> </td>
                    <td>
                      <div class="col-md-1 mt-1 mb-1">
                       
                            <button type="submit"  name="delete" value="<?php echo $productid; ?>" class="btn"  style="background-color: #87BBA2;">X</button>         
                        
                        </div> 



                    </td>
                  </tr>







<?php


                           }
                           
                    }

             }
             else
             {
                    echo "data not found";
             }





            

?>















                 
    
               
                </tbody>
              </table>
            </div>
          </form>
        </div>
    
        <div class="row">
          <div class="col-md-6">
          
           <!--  <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-md px-4" style="background-color: #87BBA2;">Apply Coupon</button>
              </div>
            </div> -->
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">

                      <?php 

                                  include 'connection.php';
                                  $user_id=$_SESSION['user_id'];
                                  $sql222="select * from cart where user_id=$user_id";
                                   $result = $conn->query($sql222);
                                      $sum=0;
                                    if ($result->num_rows > 0 ) 
 
                                    {
                                        while($row = $result->fetch_assoc()){
                                              $sum=$sum+$row['tprice'];

                                        } 
                                     

                                
                                        
                                     }                 
                                     echo $sum;
                                    
                              
                             ?>


                       
                     </strong>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-lg btn-block"  style="background-color: #87BBA2;" onclick="window.location='checkout.php'" name="checkout">Proceed To
                      Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  <?php
      }
    else{

      echo "
              <img src='photos/cart.png' width='100%'>

      ";
    }

    ?>















   </main>

<!-- END MAIN SECTION -->

<!-- Footer -->
<?php
  include 'footer.php';
?>

<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




<script src="./js/main.js"></script>
</body>
</html>