<!DOCTYPE html>
<html>

 <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

         <title>Pharma | Customers</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style4.css">
         
      <style>
          body {
            padding: 0;
            margin: 0;
            font-family: 'Lato', sans-serif;
            color: #000;
          }

          .student-profile .card {
            border-radius: 10px;
          }

          .student-profile .card .card-header .profile_img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 10px auto;
            border: 10px solid #ccc;
            border-radius: 50%;
          }

          .student-profile .card h3 {
            font-size: 20px;
            font-weight: 700;
          }

          .student-profile .card p {
            font-size: 16px;
            color: #000;
          }


      </style>
      

     </head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header" id="sidebarCollapse">
               <div id="dis"> <h3>Pharma Dashboard</h3></div>
                <img src="../photos/favicon1.png" width="100px" style="border-radius: 100px;">

                <strong>PD</strong>
            </div>


             <ul class="list-unstyled components">
                    <li>
                        <a href="dash.php" aria-expanded="false">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="products.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Add products
                        </a>
                    </li>
                    <li class="active">
                        <a href="customers.php">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Customers
                        </a>
                       
                    </li>
                    <li>
                        <a href="online_shop.php">
                            <i class="glyphicon glyphicon-send"></i>
                            Order
                        </a>
                    </li>
                    <li>
                        <a href="contact.php">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                    </li>
                    <li>
                    <a href="category.php">
                        <i class="fas fa-paper-plane"></i>
                        Add Category
                    </a>
                </li>
                 <li>
                    <a href="blogs.php">
                        <i class="fas fa-paper-plane"></i>
                        Add Blogs
                    </a>
                </li>
                 <li>
                    <a href="brand.php">
                        <i class="fas fa-paper-plane"></i>
                        Add Brands
                    </a>
                </li>
                <li>
                    <a href="coupan.php">
                        <i class="fas fa-paper-plane"></i>
                        Add Coupan
                    </a>
                </li>
                </ul>


          
        </nav>

        <!-- Page Content  -->
        <div id="content">
             <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                               
                                 <li><button style="border-radius: 50px;" id="profile" class="btn" >Profile</button> </li>
                                
                            </ul>
                        </div>
                    </div>
                </nav>


                <div class="container-fluid" id="img">
                        <img src="../photos/twilogo.png" width="100%">
                 </div>
                




                                    <div class="student-profile py-4" id="show" style="display: none;">
                                    <div class="container-fluid">
                                    <div class="row">
                                        <?php
                                                include '../connection.php';
                                                $query="select * from admin";
                                                $result=$conn->query($query);
                                                if($result->num_rows == 1)
                                                {
                                                    $row = $result->fetch_assoc();
                                                    $path=$row['photo'];
                                                    $username=$row['user_name'];
                                                }

                                        ?>
                                      <div class="col-lg">
                                        <div class="card shadow-sm">
                                          <div class="card-header bg-transparent text-center">
                                            <img class="profile_img" src="../photos/ <?php echo $path; ?> " alt="">
                                            <h3><?php echo $username; ?></h3>
                                          </div>
                                          <div class="card-body" style="margin-left: 380px; margin-top: 30px;">
                                            <button data-toggle="modal" data-target="#change_photo" class="btn">Change Profile Photo</button>
                                            <button data-toggle="modal" data-target="#change_pass" class="btn">Change Password</button>
                                          
                                          </div>
                                        </div>
                                      </div> 
                                    </div>

                                 </div>
                                 </div>


               
                            </div>
                        </div>






                 

                          

                          



<!-- FOR PROFILE PHOTO CHANGE -->

<div class="modal fade" id="change_photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Profile Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="profile.php" enctype="multipart/form-data">
        <input type="file" class="form-control" name="image">
       
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit_image" value="Upload" class="btn btn-primary">upload</button>
        </form>  
      </div>      
    </div>
  </div>
</div>


<!-- FOR PASSWORD CHANGE -->

<div class="modal fade" id="change_pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form id="change_pass1" action="change_pass.php" method="POST" enctype="multipart/form-data">
        
         <div> 
            <label>Enter New Password:</label><input class="form-control" type="text" id="password" name="password"> 
         </div>
        

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit_image" value="Upload" class="btn btn-primary">upload</button>
        </form>  
      </div>      
    </div>
  </div>
</div>

  <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>


<script type="text/javascript">
 $(document).ready(function(){
  $("#profile").click(function(){
    $("#show").css({"display":"block"});
    $("#img").css({"display":"none"});
  });
});
</script>



   <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#dis').css({"display":"none"});

            });

        });


    </script>