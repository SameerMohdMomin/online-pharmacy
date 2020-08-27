<?php

  session_start();
  $user_id=$_SESSION['user_id'];


?>





 
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style/header.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        body {
    font-family: 'Alegreya Sans', sans-serif;
    margin: 0;
    padding: 0;
}


.progressbar {
  margin: 0;
  padding: 0;
  counter-reset: step;
}
.progressbar li {
  list-style-type: none;
  width: 25%;
  float: left;
  font-size: 12px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  color: #7d7d7d;
}
.progressbar li:before {
  width: 30px;
  height: 30px;
  content: counter(step);
  counter-increment: step;
  line-height: 30px;
  border: 2px solid #7d7d7d;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  border-radius: 50%;
  background-color: white;
}
.progressbar li:after {
  width: 100%;
  height: 10px;
  content: '';
  position: absolute;
  background-color: #7d7d7d;
  top: 15px;
  left: -50%;
  z-index: -1;
}
.progressbar li:first-child:after {
  content: none;
}
.progressbar li.active {
  color: green;
}
.progressbar li.active:before {
  border-color: #55b776;
}
.progressbar li.active + li:after {
  background-color: #55b776;
}
    </style>
    <title>Pharma | Track</title>
    <meta chartset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
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



  <?php

        include 'connection.php';
        $sql="select * from online_shoping where user_id=$user_id" ;  
         $result = $conn->query($sql);
                                    
            if ($result->num_rows > 0 ) 
            {
               while($row = $result->fetch_assoc()){
               $status=$row['status'];
               $date=$row['date'];
               $date1=$row['date1'];
             
             }
            }

  ?>

    <div class="container" style="margin-top: 40px;">
        <ul class="progressbar">
            <li class="link s1" data-value="packed">Order Placed</li>
            <li class="link s2" data-value="dispatched">Order Dispatched</li>
            <li class="link s3" data-value="out_of_order">Out for delivery</li>
            <li class="link s4" data-value="delivery">Delivery</li>
        </ul>
    </div>


<div class="container">
  <div class="row">
        <h3 id="status" style="margin-left: 270px; font-weight: bold; font-family:sans-serif;  color:#777; margin-top: 40px;">

       
          
        </h3>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/jquery-ui.js"></script>


<script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>

<?php include 'footer.php'; ?>

  </body>
</html>

<script type="text/javascript">






$('.link').each(function() {
  if ($(this).data("value") === '<?php echo $status; ?>') {

     if( '<?php echo $status; ?>' === 'packed'){
          $(".status").html('Your order packed <?php echo 'Arriving Date'; echo ' '; echo $date; echo ' '; echo $date1; ?>');
     }

     else if('<?php echo $status; ?>' === 'dispatched')
     {
            $('.s1').addClass('active');
            $('#status').html('Your order Dispatched <?php echo 'Arriving Date'; echo ' '; echo $date; echo ' '; echo $date1; ?>');

          
     }

     else if('<?php echo $status; ?>' === 'out_of_order')
     {
            $('.s1').addClass('active');
            $('.s2').addClass('active');
            $('#status').html('Your order Out of Order <?php echo 'Arriving Date'; echo ' '; echo $date; echo ' '; echo $date1; ?>');
          
     }


     else if('<?php echo $status; ?>' === 'delivery')
     {
      
            $('.s1').addClass('active');
            $('.s2').addClass('active');
            $('.s3').addClass('active');
            $('#status').html('Your order Deliver <?php echo 'Arriving Date'; echo ' '; echo $date; echo ' '; echo $date1; ?>');
       
            


     }
 
  }

  
  
});
</script>