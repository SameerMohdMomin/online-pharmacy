<?php
session_start();
$user_id=$_SESSION['user_id'];


?>






<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharma | Contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>
  

  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/contact.css">
  <link rel="stylesheet" type="text/css" href="style/header.css">
<style type="text/css">
  @media (max-width: 411px)
  {
    .con4{
      display: none;
    }
  }

</style>

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




<section id="contact" style="background-color: #000;">
  
  <h1 class="section-header">CONTACT</h1>
  
  <div class="contact-wrapper">
    
    

      <!-- CONTACT PAGE LEFT  -->
    
   
    
    <form class="form-horizontal" role="form" method="post" action="contactdata.php">
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" required>
        </div>
      </div>

  <div class="form-group">
        <div class="col-sm-12">
          <select class="form-control" name="purpose" required>
            <option selected="select">Select Purpose of Contact</option>
            <option value="Business opportunities">Business opportunities</option>
            <option value="Compliments">Compliments/Testimonials</option>
            <option value="General Enqueries">General Enqueries</option>
            <option value="Incomplete Order">Incomplete Order</option>
          </select>
        </div>
      </div>

     

      <textarea class="form-control" rows="10" placeholder="MESSAGE" name="msg" required></textarea>

     <!-- Passing Userid Using SESSION -->

      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">




      
      <button class="btn send-button"  style="background-color: #87BBA2; " id="submit" type="submit" name="submit" value="SEND">
        <div class="button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
      
    </form>
    
     
<!-- 
      CONTACT PAGE RIGHT  -->
    
    
    
      <div class="direct-contact-container con4">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">INDIA | MUMBAI</span></i></li>
          
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">9137405887</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">pharma@gmail.com</a></span></i></li>
          
        </ul>

        
       

      </div>
    
  </div>
  
</section>  







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