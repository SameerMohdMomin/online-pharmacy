<?php
 error_reporting(0);
session_start();



?>

<!DOCTYPE html>
<html>
<head>
  <title>Pharma</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>
  

  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/header.css">
  <link rel="stylesheet" type="text/css" href="style/product.css">
<style type="text/css">
     @media (max-width: 500px)
     {
        .conn{
          width: 400px;
        }
       .btn4{
          display: none;
        }

        
     }





</style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


<script> 
  <?php
          if (!isset($_SESSION['user_id'])) {
            
          }
          else{
            ?>
             alert(' Welcome  <?php echo $_SESSION['username']; 


          ?>');

<?php
          }
  ?>

        
          
</script>


<?php include 'header.php'; ?>




  

<!-- MAIN   -->
<main>
     <div class="container-fluid">
          <?php
            include 'connection.php';
            $s="select * from coupan";
            $result=$conn->query($s);
            if ($result->num_rows >0) {
              $row=$result->fetch_assoc();
              $coupan=$row['coupan'];
              $discount=$row['discount'];
            }


          ?>

          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner p-0">
            <div class="carousel-item active" data-interval="10000">
              <img src="./photos/bg12.png" class="d-block w-100" alt="...">
              <div class="centered1"><button type="submit" class="btn2 btn4"><a href="product.php" style="text-decoration: none; color: #c4c1e0; ">Buy Now</a></button></div>
              <div class="centered2 btn4" style="color:#c4c1e0;">Use Our Coupan Code<br><?php echo $coupan; ?> and get <?php echo $discount; ?>% Off</div>
            </div>
            <div class="carousel-item" data-interval="2000">
              <img src="./photos/s2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./photos/bg11.jpg" class="d-block w-100" alt="...">
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
   


      

       
    
 <!-- PRODUCT SECTION -->     

<div class="container">
  <div class="container"  style="background-color: #efecec;"><h3 class="h3 text-center" style=" margin-top: 20px; margin-bottom: 50px;">Featured Products</h3> </div>
    
    <div class="row">
      

      <!-- IMAGE INSERTING -->

      <?php 
            include 'connection.php';
            $sql="select * from product where category='special'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) 
                {
                  ?>


<div class="col-sm-4 conn d-flex justify-content-center">
    <form action="viewproduct.php" method="post">
              <input type="hidden" name="productid" value="  <?php echo $row['Product_id']; ?> ">
              <input type="hidden" value="<?php echo $row['discription']; ?>">
            <div class="f_p_item">
              <div class="f_p_img">
                <img class="img-fluid" src="photos/ <?php echo $row['path']; ?>" alt="">
                <div class="p_icon">
                  <a href="#">
                      <button type="submit" class="btn2" name="add_to_cart" style="width: 100%;">
                         
                          <i class="fas fa-shopping-cart"></i>
                      </button>
                   
                  </a>
                  <a href="#">
                  <i class="far fa-heart"></i>
                  </a>
                </div>
              </div>
              <a href="#">
                <h4><?php echo $row['name']; ?></h4>
              </a>
              <h5>Rs: <?php echo $row['price']; ?></h5>
            </div>
          </form>
   </div>



<?php
  }
}


?>

        </div>
</div>












<!-- BLOG SECTION -->


<div class="container">
  <div class="container" style="background-color: #efecec;"><h3 class="h3 text-center" style=" margin-top: 20px; margin-bottom: 50px;">Advice By Our Experts</h3> </div>
    
    <div class="row">
      

      <!-- IMAGE INSERTING -->

      <?php

          include 'connection.php'; 
           $sql="select * from blog limit 3";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) 
                {
                  ?>



















 <div class="col-md-4 d-flex justify-content-center">
   
      <form action="blog.php" method="post">


              <input type="hidden" name="productid" value="  <?php echo $row['blog_id']; ?> ">
              <input type="hidden" name="discription" value="<?php echo $row['discription']; ?>">

              <input type="hidden" name="title" value="<?php echo $row['title'];?>">
              <input type="hidden" name="image" value="<?php echo $row['path'];?>">


         <div class="card p-2" style="width: 15rem;">
              <img class="card-img-top" src="photos/ <?php echo $row['path']; ?>">
              <div class="card-body">

              <p class="card-text text-center"><?php echo $row['title']; ?></p>
              <button type="submit" style="width: 100%; background-color: #F4E8C1;">More Info</button>
              </div>
        </div>  
      </form>
    
</div>




   <!-- Button trigger modal -->


<!-- Modal -->
     



<?php
  }
}

?>

        </div>
</div>



      

          
</main>

<!-- END MAIN SECTION -->

<?php include 'footer.php'; ?>

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
            url:'search.php',  
            method:'POST',
            data:$('form').serialize(),
            dataType:'text',
            success:function(strMessage)
            {
                $('.viewcontent1').html(strMessage);
            }
        }); 
       }
       else{
                  $('.viewcontent1').html('');
           }

    });
    
    });
    
    
    
    
    
</script>






