<?php
          session_start();
         $user_id=$_SESSION['user_id'];
      
         

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>
</head>
<style type="text/css">
  .site-logo:hover{
     color: #f51167;
  }
</style>

<body>


  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left logo" style="font-size: 30px;">
            <!-- logo -->
            <a href="index.php" class="site-logo" style="text-decoration: none; color: white; font-weight: bold; font-family: sans-serif;">
              Pharma
            </a>
          </div>
          <div class="col-xl-6 col-lg-5">
            <form class="header-search-form">
              <input type="hidden" id="category1" name="category1">
              <input type="text" name="search-text" id="search-text" placeholder="Search on Pharma">
              <button><i class="fa fa-search"></i></button>
            </form>
          </div>


   <?php
                                  
                                  if($_SESSION['status'] == 'offline') 
                                  { 
                                      
                                        ?>
                                 <div class="col-xl-3 col-lg-5 d-flex justify-content-end">
                                      <div class="dropdown mr-1">
                                        <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" style="background-color: #D7D9CE;">
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
                                                                      
                                                                      $sum=$sum+1;
                                                                    }
                                                                  }
                                                                echo $sum;
                                                          ?>



                                                      </span>
                                                    </div>
                                                    <a href="cart.php" style="text-decoration: none; color: black;">Cart</a>
                                                     <div class="up-item">
                                                         
                                                          <?php
                                                          include 'connection.php';
                                                          $sq="select * from online_shoping where user_id='$user_id'";
                                                           $result = $conn->query($sq);
                                                                if ($result->num_rows == 1) {

                                                                  ?>
                                                                  <li class="fas fa-truck" ></li>
                                                                  <a href="tract.php" style="text-decoration: none; color: black;">Track Your Order</a>
                                                            <?php
                                                                }
                                                          ?>
                                                          
                                                        </div>
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


        <div class="col-7 col-sm-3 viewcontent1" style="margin-left: 200px;"> 

                          
                
                    
          </div>
  </header>




</body>
</html>