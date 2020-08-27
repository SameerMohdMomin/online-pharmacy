<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	 <title>Pharma</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>
  

  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
  <header>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-12 text-center">
        <h2 class="my-md-3 site-title text-white" style="margin-right: 120px;">Online Pharma</h2>        
      </div>
   

    <div class="col-md-8 col-sm-12 col-12 text-right profile">
       


          <?php
                                  
                                  if($_SESSION['status'] == 'offline') 
                                  { 
                                      
                                        ?>


                                    <div class="d-flex mt-3 justify-content-end">
                                      <div class="dropdown mr-1">
                                        <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" style="background-color: #c4c1e0;">
                                          <i class="fas fa-user"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                        <a class="dropdown-item fas fa-shopping-cart" href="cart.php">Cart</a>
                                        <a class="dropdown-item fas fa-sign-out-alt" href="logout.php">Logout</a>
                                        </div>
                                      </div>
                                    </div>

                          <?php
                                   
                                  }
                                    
                           
                                   else
                                   {
                                           

                                     echo "<i class='fas fa-sign-in-alt'> </i><a href='login.html' class='px-2 text-white'>Sign In</a>";

                                     echo "<a href='create.php' class='px-1 text-white'>Create an Account</a>";

                                   }

                       
                         




          ?>
        


      
         
      </div>

      
    </div>
  </div>




  
</header>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Pharma</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-ellipsis-v"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blogs</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
     
     
    </div>
</nav>


	        <form>
              <input type="hidden" id="category1" name="category1">
          </form>

				  <div class="navbar-nav">
                
                  <div class="col-md-8 offset-md-2 bg-light p-4 rounded">
                    
                      <input type="text" name="search-text" id="search-text" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." style="width: 100%;">

                      <input type="submit" name="submit" id="search" class="btn btn-info btn-lg rounded-0" style="width: 20%;">
                      
                   
                    
                  </div> 
                </div>



<div class="container">
  <hr>


    <div class="row viewcontent">




  </div>
</div>

        
                  





<footer class="page-footer font-small blue-grey lighten-5" style="background-color: #c4c1e0; ">

  <div style="background-color:#7c73e6;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold p1">Company name</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p  class="p1">Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful Links</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#"  style="color: black;">Exclusive Deals</a>
        </p>
        <p>
          <a class="dark-grey-text" href="blog.php"  style="color: black;">Blogs</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!"  style="color: black;">Product Section</a>
        </p>

        <p>
          <a class="dark-grey-text" href="#!"  style="color: black;">Brands In Focus</a>
        </p>
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="product.php" style="color: black;">Ayush</a>
        </p>
        <p>
          <a class="dark-grey-text" href="product.php"  style="color: black;">Fitness</a>
        </p>
        <p>
          <a class="dark-grey-text" href="product.php"  style="color: black;">Personal Care</a>
        </p>

        <p>
          <a class="dark-grey-text" href="product.php"  style="color: black;">Family Care</a>
        </p>

        <p>
          <a class="dark-grey-text" href="product.php"  style="color: black;">Lifestyle</a>
        </p>

        <p>
          <a class="dark-grey-text" href="product.php"  style="color: black;">Devices</a>
        </p>
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold p1">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p class="p1">
          <i class="fas fa-home mr-3"></i>Mumbai</p>
        <p class="p1">
          <i class="fas fa-envelope mr-3"></i> example@gmail.com</p>
        <p class="p1">
          <i class="fas fa-phone mr-3"></i> + 01 11 3466</p>
        <p class="p1">
          <i class="fas fa-print mr-3"></i> + 01 43 5667</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->



</footer>


<!-- Footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/jquery-ui.js"></script>


<script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>


</body>
</html>



<script>
  


$(document).ready(function(){

    
  $("#search-text").keyup(function() {
    
        let value=$(this).val();
        $('#category1').val(value);
      if(value!='')
      {
        event.preventDefault();
        $.ajax({
            url:'bigsearch.php',  
            method:'POST',
            data:$('form').serialize(),
            dataType:'text',
            success:function(strMessage)
            {
                $('.viewcontent').html(strMessage);
            }
        }); 
       }

       else{
                  $('.viewcontent').html('');
                 }

    });
    
    });
    
    
    
    
    
</script>