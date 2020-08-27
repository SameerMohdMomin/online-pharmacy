<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pharma</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/header.css">
  <link rel="stylesheet" type="text/css" href="style/product.css">

    <!-- Custom CSS -->
<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Anton|Gugi|Lato|Roboto|Sofia&display=swap');
  @media (max-width: 411px){
    .btn1 .btn2{
      flex-direction: row;
      width: 100%;
    }
    .div1{
      flex-direction: row-reverse;
      margin-top: 140px;

    }
    .con11>img{
     
      display: none;
    }
    
      .centered{
          font-size: 20px;
          display: none;
      }
    }

     #rangevalue{
      position: absolute;
      top: 2px;
      right: -1px;
      
      width: 50px;
      box-sizing: border-box;
      background-color:#D7D9CE;
      text-align: center;


    }
    div{
      position: relative;
    }

    #rangevalue :before{
      content: '';
      top: 30%;
      transform: translateY(-50%) rotate(45deg);
      position: absolute;
      background: #fff;
      left: -5px;
      width: 10px;
      height: 10px;

    }

    .range{
      width: 125px;
      height: 2px;
      padding: 2px;
      background: #111;
      -webkit-appearance:none;
      outline: none;
      border-radius: 5px;

    }
      


  
</style>

 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<?php  include 'header.php'; ?>

<!-- MAIN   -->



<main>

          <form>
              <input type="hidden" id="category" name="category">
          </form>

     <div class="container-fluid">
          

          



           <div class="container-fluid">
                <div class="row" style="background-color: #D7D9CE;"> 
                  <div class="col-md-2">
                     <button class="btn1" value="Ayush" >Ayush</button>
                  </div>
                  <div class="col-md-2">
                    <button class="btn1" value="fitness">Fitness</button>
                  </div>
                  <div class="col-md-2">
                     <button class="btn1" value="Personal_care">Personal Care</button>
                  </div>
                  <div class="col-md-2">
                     <button class="btn1" value="Family_care">Family Care</button>
                  </div>
                  <div class="col-md-2">
                    <button class="btn1" value="Lifestyle">Lifestyle</button>
                  </div>
                  <div class="col-md-2">
                    <button class="btn1" value="Devices">Devices</button>
                  </div>
                </div>

              </div>



          </div>

               <div class="bg-light py-3">
                    <div class="container">
                      <div class="row">

                        <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">></span> <a href="product.php">Store</a> <span class="mx-2 mb-0"></span> <strong class="text-black">
                              
                            </strong></div>
                      </div>
                    </div>

                  </div>

   


      

       
    
 <!-- PRODUCT SECTION FILTERS -->  
 <div class="container-fluid">
   <div class="row">
     <div class="col-2">
       




      <div class="container">
        <div class="row">
          <div class="col-md-3" style="margin-top: 10px;">

     

<!-- CATEGORY -->
                    <div class="container-fluid">
                        <div class="row">
                         <p>
                                  
                          <button class="btn1 category font-weight-bold col-12 d-flex col-sm-6" style="background-color: #D7D9CE; width: 340px;" type="button"  data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                          <i class='fa fa-arrow-right'></i>Categories</button>
                        
                         </p>
                                <div class="collapse" id="collapseExample1">
                                  <div class="card card-body col-12 d-flex col-sm-12">

                             
                                
                                      <div class="list-group">
                                       <button> 

                                          <?php
                                                  include 'connection.php';

                                                  $sql3="select * from category";
                                                  $result3 = $conn->query($sql3);

                                                  if ($result3->num_rows > 0) {
                                                      while($row3 = $result3->fetch_assoc()) 
                                                      {
                                                        ?>
                                               <button class="btn1"  style="background-color: #D7D9CE;" value="<?php echo $row3['cat_name'] ?>" ><a href="#"  style="background-color: #D7D9CE; color: #000;" class="list-group-item active" value="<?php echo $row3['cat_name'] ?>"><?php echo $row3['cat_name']; ?></a></button>

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

<!-- PRICE -->
                     <div class="form-group" style=" width: 170px; background-color: #D7D9CE;">
                      <span style="font-weight: bold;">Price Range:</span>
                              <div>
                                                <form>
                                                    <input type="hidden" id="range_price" name="range_price">
                                                </form>
                             
                                 <span id="rangevalue">0</span>
                                 <input type="range" class="range" name="price" id="price" value="0" min="0" max="1000" onmousemove="rangeslider(this.value)" onchange="rangeslider(this.value)">

                                </div>
                              <script type="text/javascript">
                                function rangeslider(value) {
                                   document.getElementById('rangevalue').innerHTML=value
                                }
                              </script>
                     </div>


<!-- BRAND -->
                     <div class="container-fluid">
                        <div class="row">
                         <p>
                                  
                          <button class="btn2 font-weight-bold col-12 d-flex col-sm-6" style="width: 340px; background-color: #D7D9CE;" type="button"  data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                          <i class='fa fa-arrow-right'></i>Brands</button>
                        
                         </p>
                                <div class="collapse" id="collapseExample2">
                                  <div class="card card-body col-12 d-flex col-sm-12">



                                                 <form>
                                                    <input type="hidden" id="brand" name="brand">
                                                </form>
                             
                                
                                      <div class="list-group">
                                       <button> 

                                          <?php
                                                  include 'connection.php';

                                                  $sql4="select * from brand";
                                                  $result4 = $conn->query($sql4);

                                                  if ($result4->num_rows > 0) {
                                                      while($row4 = $result4->fetch_assoc()) 
                                                      {
                                                        ?>
                                               <button class="btn2"  style="background-color: #D7D9CE; " value="<?php echo $row4['brand'] ?>" ><a href="#"  style="background-color: #D7D9CE; color: #000; " class="list-group-item active" value="<?php echo $row4['brand'] ?>"><?php echo $row4['brand']; ?></a></button>

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
                  <div class="div1">
                        
                        <h2 id="product_heading">SHOP</h2>
                        <p id="p1">Welcome To Pharma pvt limited</p>                
                 
                  </div>
                  <div class="row viewcontent" style="margin-top: 15px; margin-left: 30px;">
      
                          <div class="container-fluid con11 col-12 d-flex col-sm-12">
                            <img src="photos/pro11.jpg" style="opacity: 0.5;">
                            <div class="centered">PLEASE SELECT THE CATEGORY</div>
                          </div>
      

         
                    </div>
     </div>
   </div>
 </div>   

  





          



      

          
</main>









<!-- END MAIN SECTION -->

<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- Footer -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/jquery-ui.js"></script>


<script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>



<!-- <script src="js/main.js"></script> -->
</body>
</html>

<script>
  


$(document).ready(function(){

    
    $(".btn1").click(function(){
        let value=$(this).val();
        $('#category').val(value);
      
        event.preventDefault();
        $.ajax({
            url:'process.php',  
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







<!-- FOR BRAND FILTER -->

<script>
  


$(document).ready(function(){

    
    $(".btn2").click(function(){
        let value=$(this).val();
        $('#brand').val(value);
      
        event.preventDefault();
        $.ajax({
            url:'process_brand.php',  
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





<script>
  


$(document).ready(function(){
   
    $(document).on('change', '#price', function() {
      let value=$(this).val();
        $('#range_price').val(value);
            
      event.preventDefault();
        $.ajax({
            url:'price.php',  
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






