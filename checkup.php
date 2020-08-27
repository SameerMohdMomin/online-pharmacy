<?php
          session_start();
         $user_id=$_SESSION['user_id'];
      
         

?>



<!DOCTYPE html>
<html>
<head>
	<title>Pharma</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
	<link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/header.css">
  

    <!-- Custom CSS -->
<style type="text/css">
.centered6 {
  position: absolute;
  top: 60px;
  left: 500px;
  transform: translate(-50%, -50%);
  font-size: 40px;
  font-family: var(--gugi);
  color: black;
}
.centered7 {
  position: absolute;
  top: 135px;
  left: 489px;
  transform: translate(-50%, -50%);
  font-size: 25px;
  font-family: var(--gugi);
  color: red;
}
.centered8 {
  position: absolute;
  top: 200px;
  left: 500px;
  transform: translate(-50%, -50%);
  font-size: 30px;
  font-family: var(--gugi);
  color: red;
}

.centered9 {
  position: absolute;
  top: 260px;
  left: 500px;
  transform: translate(-50%, -50%);
  font-size: 25px;
  font-family: var(--gugi);
  color: red;
}

.centered22 {
  position: absolute;
  top: 300px;
  left: 500px;
  transform: translate(-50%, -50%);
  font-size: 25px;
  font-family: var(--gugi);
  color: red;
}

  @media (max-width: 411px){
   
   
    img{
      width: 380px;
    }

      .row2{
        flex-direction: column;
      }

    .contact-wrapper{
      width: 380px;
    }
    .can{
      display: none;
    }
 
    

   }   


  
</style>

 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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



<main  style="background-color: #ACC3A6;">

          

    

               <div class="bg-light py-3">
                    <div class="container">
                      <div class="row">

                        <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">></span> <a
                            href="product.php">Checkup</a> <span class="mx-2 mb-0"></span> <strong class="text-black">
                              
                            </strong></div>
                      </div>
                    </div>

                  </div>



                  <div class="container">
                    <div class="row row2">
                      <div class="col-8 d-flex flex-direction-row">

                          <img src="./photos/checkup.jpg">
                          <div class="can">
                          <h4 class="centered6">Pharma Suvidha</h4>
                          <p class="centered7">Full Body Checkups</p>
                          <h5 class="centered8">70% Introductory Offer</h5>
                          <h6 class="centered9">Only <del>Rs.3200</del></h6>
                          <h5 class="centered22">Rs.900</h5>
                        </div>

                      </div>
                      <div class="col-3 d-flex flex-direction-row row3">
                        <section id="contact">
  
                            <h2 class="section-header text-center align-items-center">Full Body Checkup</h2>
                            
                            <div class="contact-wrapper">
                              
                              

                                <!-- CONTACT PAGE LEFT  -->
                              
                             
                              
                              <form class="form-horizontal" role="form" method="post" action="checkupdata.php">
                                 
                                <div class="form-group">
                                  <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name" placeholder="NAME" name="name">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-sm-12">
                                    <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email">
                                  </div>
                                </div>

                                 <div class="form-group">
                                  <div class="col-sm-12">
                                    <input type="text" class="form-control" id="pin" placeholder="PIN CODE" name="pin">
                                  </div>
                                </div>

                                 <div class="form-group">
                                  <div class="col-sm-12">
                                    <input type="text" class="form-control" id="phone" placeholder="MOBILE NUMBER" name="mobile">
                                  </div>
                                </div>

                            <div class="form-group">
                                  <div class="col-sm-12">
                                    <select class="form-control" name="purpose">
                                      <option selected="select" disabled="true">Choose Package</option>
                                      <option value="Diabetic Checkup">Diabetic Checkup</option>
                                      <option value="Fewer">Fewer</option>
                                      <option value="Full Body Checkup">Full Body Checkup</option>
                                      <option value="Basic Allergy Checkup">Basic Allergy Checkup</option>
                                      <option value="Vital Checkup">Vital Checkup</option>
                                    </select>
                                  </div>
                                </div>

                               

                              

                               <!-- Passing Userid Using SESSION -->

                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">




                                
                                <button class="btn send-button"  style="background-color: #87BBA2; border-radius: 100px; width: 100%" id="submit" type="submit" name="submit" value="SEND">
                                  <div class="button">
                                    <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                                  </div>
                                
                                </button>
                                
                              </form>
                              
                               
                              
                            </div>
                            
                          </section>  


                      </div>
                    </div>
                  </div>

   

























          
</main>









<!-- END MAIN SECTION -->

<!-- Footer -->

   <?php
        include 'footer.php';
   ?>
<!-- Footer -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/jquery-ui.js"></script>


<script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>



<!-- <script src="js/main.js"></script> -->
</body>
</html>

