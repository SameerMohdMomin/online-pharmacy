<?php
error_reporting(0);
          session_start();
          header("Pragma: no-cache");
          header("Cache-Control: no-cache");
          header("Expires: 0");
          $user_id=$_SESSION['user_id'];
          $totaldis=$_SESSION['totaldis'];
         
      
         

?>









<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharma | Checkout</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style type="text/css">
    @media (max-width: 500px){
      .col4{
        margin-left:10px;
      }
    }
  </style>

  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/header.css">




    <!-- Custom CSS -->
  

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


  <!-- Default unchecked -->
 

<!-- Default checked -->

     <div class="container-fluid">
          

        

        

           







    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>
  </div>






<!-- RADIO SELCECTION -->






  <div class="container-fluid">
    <span><h2 class="text-center" style="font-family: gugi; color:#c4c1e0; "> Please Select Payment Method </h2></span>
    <div class="row">
      <div class="col-sm-6 text-center">

        <button class="btn btn-success" id="os">Online Shoping</button>
      </div>
      <div class="col-sm-6 text-center">
        <button class="btn btn-success" id="cod">Cash On Delivery</button> 

    </div>
    </div>
  </div>
    





  <div class="container-fluid" id="div1" style="display: none;">


    <div class="site-section">
      <div class="container">
        <!-- <form action="online_shop.php"> -->
      
        <div class="row">

        <div class="col-md-6 mb-5 mb-md-0">
          <form method="post" id="submit_details">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Date Of Delivery <span class="text-danger">*</span></label>
                  <?php 
                        $date1=date('m-d', strtotime($Date. ' + 2 day'));
                        $date=date('D', strtotime($Date. ' + 2 day'))
                   ?>
                   <h4><?php echo $date; echo " "; echo $date1; ?></h4>
                  <input type="hidden" class="form-control" name="date" value="<?php echo $date; ?>">
                  <input type="hidden" class="form-control" name="date1" value="<?php echo $date1; ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
              </div>
    
             
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Street address">
                </div>
              </div>
    
             
    
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="state" name="state">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="zip" name="zip">
                </div>
              </div>
    
              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                </div>
              </div>
               <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
                       value="<?php echo  "ORDS" . rand(10000,99999999)?>">
    
             
    
    <button class="btn btn-primary btn-lg btn-block" value="CheckOut" type="submit" onclick="">Submit Details</button>
    
            
    
            </div>
          </form>
          </div>
          <div class="col-md-6">
    

    
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">

                 <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                  <?php 


                            include 'connection.php';
                            $user_id=$_SESSION['user_id'];
                          
                            $sqll="select * from cart where user_id=$user_id";
                            
                             $result = $conn->query($sqll);
                             if ($result->num_rows > 0 ) 
                             {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                       $s="update cart set status='purches' where user_id=$user_id";
                                                      if($conn->query($s)==TRUE)
                                                      {
                                                        
                                                      }
                                                    

                                     ?>
                            
<?php
                                          $quantity=$row['quantity'];
                                          $productid=$row['Product_id'];

                                          $tprice=$row['tprice'];
                                          

                                          //  echo "
                                          //     <input type='hidden' name='quantity' value='$quantity'>
                                          //     <input type='hidden' name='product_id' value='$productid'>
                                          //     <input type='hidden' name='tprice' value='$tprice'>
                                          // ";
                                        
                                           $sql2="select * from product where Product_id=$productid";
                                            $result1 = $conn->query($sql2);
                                           if ($result1->num_rows == 1) 
                                           {
                                                $row = $result1->fetch_assoc();
                                                $name=$row['name'];
                                              
                                                $price=$row['price'];

                                                


                ?>
           
                    <tbody>
                      <tr>
                        <td><?php echo $name; ?><strong class="mx-2">x</strong> <?php echo $quantity; ?></td>
                        <td> <?php echo $price;?> </td>
                      </tr>
                     
                     
                      
    <?php


      }

    }

  }



    ?>






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
                                     
                              
                             ?>



                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold">
                  <strong>
                        

                        <?php
                            if (isset($_SESSION['totaldis'])) {
                                ?>

                                 <?php  echo $_SESSION['totaldis'];?> <sub><del><?php echo $sum; ?></del></sub>
                                
                                <?php
                            }
                            else {
                                    echo $sum;
                            }

                        ?>


                          <!-- <?php echo $sum; ?> -->
                            
                   </strong></td>
                      </tr>
                    </tbody>
                  </table>
                  
    
                  <div class="form-group">


                  <form method="post" action="./paytm/Paytmkit/pgRedirect.php">
                    <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
                       value="<?php echo  "ORDS" . rand(10000,99999999)?>">
   
                      <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $user_id; ?>">


                      <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">


                      <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">

                      <input title="TXN_AMOUNT" type="hidden" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $sum; ?>">



                    <button class="btn btn-primary btn-lg btn-block" value="CheckOut" type="submit" onclick="">Place
                      Order</button>
                  </form>
                  </div>
    
                </div>
              </div>
            </div>


<?php
                if(isset($_SESSION['totaldis']))
                {


                }
                else{
                  ?>
             <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                <div class="p-3 p-lg-5 border">
                  <?php 
                      include 'connection.php';

                                $sql="select * from coupan";
                                $result = $conn->query($sql);
                                if($result->num_rows == 1){
                                    $row = $result->fetch_assoc();
                                    $coupan=$row['coupan'];
                                    $discount=$row['discount'];
                                   

                                  }
                                

                  ?>
             
          

            <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
             <form id="coupan" action="coupandiscount.php" method="post">
                  <div class="input-group w-75">
                    <input type="hidden" id="sum" name="sum" value="<?php echo $sum; ?>">
                    <input type="text" class="form-control" name="code" id="code" placeholder="Coupon Code" aria-label="Coupon Code"
                      aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm px-4" type="submit" id="button-addon2">Apply</button>
                    </div>
                  </div>
            </form>

<?php
                }

          ?>     
           
    
                </div>
              </div>
            </div>
    
          </div>
        </div>
        
      <!-- </form> -->
      </div>
    </div>
    
     </div>


















<!-- COD -->

    <div class="container-fluid" id="div2" style="display: none;">
          <div class="row">
          <form action="cod.php" method="post">
           <div class="col-md-12 offset-9 col4">
            <h2 class="h3 mb-3 text-black text-center">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
              
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="lname">
                </div>
              </div>
    
             
             
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="address" placeholder="Street address">
                </div>
              </div>
    
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
              </div>
    
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="zip">
                </div>
              </div>
    
              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="email">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="phone" placeholder="Phone Number">
                </div>
              </div>
               <div class="col-md-12">
                <input type="hidden" name="tprice" value="<?php echo $sum; ?>" >
                       <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" >
                       
                    <button type="submit" class="btn btn-primary" name="submit" style="width: 100%;">Place Order</button>
               </div>
    
             
    
    
            
    
    
            </div>
          </div>
        </form>
       </div>
    </div>


   
    


      

       
    
 <!-- PRODUCT SECTION -->     





          


      


          
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

</body>
</html>




<script>
  $(document).ready(function(){
  $("#cod").click(function(){
    $("#div2").css({"display":"block"});
    $("#div1").css({"display":"none"});
  });
});

$(document).ready(function(){
  $("#os").click(function(){
    $("#div1").css({"display":"block"});
    $("#div2").css({"display":"none"});
  });
});
</script>




<script>
   $('#submit_details').on('submit',function(event){
      event.preventDefault();
      if($('#name').val()!='' && $('#address').val()!=''  && $('#state').val()!='' && $('#zip').val()!='' && $('#email').val()!=''  && $('#phone').val()!='' )
      {

        var formData=$(this).serialize();

        $.ajax({
          url:"online_pay.php",
          method:'POST',
          data:formData,
          success:function(data)
          {
             $("#submit_details").css({"display" : "none"});
             swal("Your Address!" ,"Submited Sucessfully" , "success", {
                button: "Close!",
              });
              
          }
        });
      }
      else
      {
        alert('all field required');
      }
    });
</script>



<script>
   $('#pay').on('submit',function(event){
      event.preventDefault();
      if($('#ORDER_ID').val()!='' && $('#sum').val()!='')
      {

        var formData=$(this).serialize();

        $.ajax({
          url:"online_pay.php",
          method:'POST',
          data:formData,
          success:function(data)
          {
              alert("SUCCESS");
              
          }
        });
      }
      else
      {
        alert('all field required');
      }
    });
</script>



<!-- 


<script>
   $('#coupan').on('submit',function(event){
      event.preventDefault();
      if($('#code').val()!='' && $('#sum').val()!='')
      {

        var formData=$(this).serialize();

        $.ajax({
          url:"coupandiscount.php",
          method:'POST',
          data:formData,
          success:function(data)
          {
             alert('<?php $total ?>');              
          }
        });
      }
      else
      {
        alert('Please Enter Coupon code');
      }
    });
</script>






 -->


<script>
  if(isset($_SESSION['totaldis']) == true)
  {
    document.write("success");
  }
</script>