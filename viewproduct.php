<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['user_id'])) {
  echo "

                       <script>
                        alert('Please Login First to Place Order')
                        window.open('login.html','_self')
                        </script>

  ";
}
$user_id=$_SESSION['user_id'];
if(isset($_POST['add_to_cart'])){
  $productid=$_POST['productid'];
  
}


?>




<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pharma | ViewProduct</title>
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
	   
   





<?php 

include 'connection.php';
   

            $sql="select * from product where product_id=$productid";

            $result=$conn->query($sql);
             $result = $conn->query($sql);
             if ($result->num_rows == 1) 
             {  
                    $row = $result->fetch_assoc();
                    $name=$row['name'];


                    $price=$row['price'];
                    $_SESSION['price']=$price;
                    $discription=$row['discription'];
                    $path=$row['path'];
                    $r_price=$row['r_price'];

             }
             else{
                    echo "data not found";
             }

            




            






?>








 <div class="bg-light py-3">
      <div class="container">
        <div class="row">

          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a
              href="product.php">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">
                
              </strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
         <form action="cartdata.php" method="post" id="message_form">
        <div class="row">

          <div class="col-md-5 mr-auto">
            <div class="border text-center">
             
              <img src="photos/ <?php echo $path ; ?>" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black"></h2>
            <p> 
      
            
             
                  <?php
                        echo $name;

                  ?>

            </p>
            

            <p><del><?php echo $r_price; ?></del>  <strong class="text-primary h4">
              <?php
                        echo $price;

                  ?>
                       
                  </strong> </p>

            
            
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 220px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button" name="minus" id="minus">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" placeholder=""
                  aria-label="Example text with button addon" aria-describedby="button-addon1" id="TextBox" name="quantity">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button" name="plus" id="plus">&plus;</button>
                </div>
              </div>
  

        <script type="text/javascript">
				  
                   $(document).ready(function(){
		                $('#plus').click( function() {
		                    var counter = $('#TextBox').val();
		                    counter++ ;
                        if(counter <= 4 ){
                            $('#TextBox').val(counter); 
                        }
                        else{
                            $('#TextBox').text(4); 
                            // document.getElementById('TextBox').disabled=true;
                        }
		                    
		                });

		           		 
		           		  $('#minus').click( function() {
		                    var counter = $('#TextBox').val();
		                   
                        if(counter==1)
                        {
                           $('#TextBox').val(counter);

                        }
                        else{
                          counter-- ; 
                          $('#TextBox').val(counter);
                        }
		                   
		                });

		            });
				</script>





            </div>
            <p><button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-success" name="productid" value="<?php echo $productid; ?>">Add To Cart</button></p>

            <div class="mt-5">
                  <h3>Ordering Information</h3>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><?php echo $name; ?></th>
                        <td><?php echo $discription; ?></td>
                        <td><?php echo $price; ?></td>
                      </tr>
                    
                      
                    </tbody>
                  </table>
                </div>
             
            
              </div>
            </div>

    
          </div>

        
        </div>
      </form>
      </div>
    </div>

    















   </main>

<!-- END MAIN SECTION -->
   
   <?php
        include 'footer.php';
   ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




<script src="./js/main.js"></script>
</body>
</html>


<!-- 
<script>

  $(document).ready(function(){


    function showunreadNotifications(option='')
    {
       $.ajax({

        url:'fetch.php',
        method:'POST',
        data:{option:option},
        dataType:'json',
        success:function(data)
        {
          
          $('.dropdown-menu').html(data.notification);
          if(data.unreadNotification > 0)
          {
            $('.count').html(data.unreadNotification); 
          }


        }
       });
    }

    showunreadNotifications();    

    $('.dropdown-toggle').click(function(){
        $('.count').html('');
        showunreadNotifications('clear');

      })


      setInterval(function(){
        showunreadNotifications();
      },5000);



    $('#message_form').on('submit',function(event){
      event.preventDefault();
      if($('#name').val()!='' && $('#path').val()!='' && $('#price').val()!='' )
      {

        var formData=$(this).serialize();

        $.ajax({
          url:"insert.php",
          method:'POST',
          data:formData,
          success:function(data)
          {
            $('#message_form')[0].reset();
            showunreadNotifications();
          }
        });
      }
      else
      {
        alert('both field required');
      }
    });


  });

</script>


