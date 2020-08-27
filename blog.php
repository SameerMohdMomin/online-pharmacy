<?php
error_reporting(0);
session_start();



?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharma | Blog</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/header.css">

</head>
<body>


<style type="text/css">
    .navitems>a {
            margin-right: 2rem;
            color: #c4c1e0;
        }

        @media (max-width: 500px){
           .div1{
            display: none;
           }
           .btn1{
            width: 100%;
           }
        }


</style>
 

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
     <div class="container-fluid">
          

          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner p-0">
            <div class="carousel-item active" data-interval="10000">
              <img src="./photos/blog5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
              <img src="./photos/blog4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./photos/blog6.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


        

          


          </div>
             <form>
              <input type="hidden" id="category" name="category">
          </form>

    
          

          



           <div class="container-fluid p-2">
                <div class="row" style="background-color:#D7D9CE;"> 
                  <div class="col-md-3 text-center">
                     <button class="btn1" value="beauty" >Beauty</button>
                  </div>
                  <div class="col-md-3 text-center">
                    <button class="btn1" value="fitness">Fitness</button>
                  </div>
                  <div class="col-md-3 text-center">
                     <button class="btn1" value="wellness">Wellness</button>
                  </div>
                  <div class="col-md-3 text-center">
                     <button class="btn1" value="food">Food</button>
                  </div>
                  

              </div>



          </div>


<h2></h2>

 <div class="container-fluid">
   <div class="row">
     <div class="col-2">
       




      <div class="container">
        <div class="row">
          <div class="col-md-3" style="margin-top: 35px;">

     

<!-- CATEGORY -->
                    <div class="container-fluid">
                        <div class="row">
                         <p>
                                  
                          <button class="btn1 category font-weight-bold col-12 d-flex col-sm-3" style="background-color: #D7D9CE;" type="button"  data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                          <i class='fa fa-arrow-right'></i>Categories</button>
                        
                         </p>
                                <div class="collapse" id="collapseExample1">
                                  <div class="card card-body col-12 d-flex col-sm-12">

                             
                                
                                      <div class="list-group">
                                       <button> 

                                          <?php
                                                  include 'connection.php';

                                                  $sql3="select * from blog_cat";
                                                  $result3 = $conn->query($sql3);

                                                  if ($result3->num_rows > 0) {
                                                      while($row3 = $result3->fetch_assoc()) 
                                                      {
                                                        ?>
                                               <button class="btn1"  style="background-color: #D7D9CE; " value="<?php echo $row3['blog_category'] ?>" ><a href="#"  style="background-color: #D7D9CE; color:#000; " class="list-group-item active" value="<?php echo $row3['blog_category'] ?>"><?php echo $row3['blog_category']; ?></a></button>

                                               <?php
                                              }
                                              }
                                               ?>

                                                
                                        </button>
                                       </div>
                        
                                  </div>
                                </div>
                          </div>
                    </div>     
          </div>
       </div>
      </div>


</div>


<!-- PRODUCT SECTION START -->


     <div class="col-9 offset-1">
                  <div class="div1" style="margin-top: 35px;">
                        
                        <h2 id="product_heading">Advice From</h2>
                        <p id="p1">Health Experts</p>                
                 
                  </div>
                  <div class="row viewcontent" style="margin-top: 15px; margin-left: 30px;">
      
                          <div class="container">

                              <?php 

                                $title=$_POST['title'];
                                $image=$_POST['image'];
                                $discription=$_POST['discription'];


                                

                              ?>

                              
                              <span style="color: black; font-family: gugi;"><h2 class="text-center"><?php echo $title?></h2></span>
                              <div class="row" style="margin-top: 40px;">
                                <div class="col-12 col-sm-3">
                                  <div class="card" style="width: 18rem;">
                                    <img src="./photos/ <?php echo $image; ?>" class="card-img-top" alt="...">
                                  </div>

                                </div>
                                 <div class="col-12 col-sm-6 offset-sm-2 mt-3">
                                    <h4 class="d-flex text-left" style="color: black; font-family: sans-serif;"><?php echo $discription; ?></h4>
                                 </div>
                              </div>



                         </div>
      

         
                    </div>
     </div>
   </div>
 </div>   

  


      

       

          
</main>



<!-- END MAIN SECTION -->


<!-- Footer -->
<?php include 'footer.php';  ?>

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

    
    $(".btn1").click(function(){
        let value=$(this).val();
        $('#category').val(value);
      
        event.preventDefault();
        $.ajax({
            url:'process_blog.php',  
            method:'POST',
            data:$('form').serialize(),
            dataType:'text',
            success:function(strMessage)
            {
                $('.viewcontent').html(strMessage);
            }
        }); 
    });
    
    });
    
    
    
    
    
</script>






