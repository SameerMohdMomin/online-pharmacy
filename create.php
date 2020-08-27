

<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharma | Signup</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
      <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="style/login.css">
   <style type="text/css">
  .form-control {
    border-radius: 15px 50px 30px;
    border: 2px solid #917C78;
    padding: 20px; 
   
    height: 15px; 

}

   </style>
  </head>
  <body style="background-color: #928C6F;">
   

  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" style="background-color: #C3C48D;">
            <h5 class="card-title text-center">Create An Acoount</h5>
         


      <form class="form-signin" action="userdata.php" method="post" onsubmit="return validation()">
        
        <div class="form-group">
          
          <input type="text" name="name" class="form-control" id="user" placeholder="Username"  autocomplete="off">
          <span id="username" class="text-danger font-weight-bold"> </span>
        </div>

        

        <div class="form-group">
          <input type="text" name="phone" class="form-control" id="mobileNumber" placeholder="Phone" autocomplete="off">
          <span id="mobileno" class="text-danger font-weight-bold"> </span>
        </div>

        <div class="form-group">
         
          <input type="text" name="email" class="form-control" id="emails" placeholder="Email" autocomplete="off">
          <span id="emailids" class="text-danger font-weight-bold"> </span>
        </div>


        <div class="form-group">
          
          <input type="text" name="password" class="form-control" id="pass" placeholder="Password" autocomplete="off">
          <span id="passwords" class="text-danger font-weight-bold"> </span>
        </div>

        <div class="form-group">
          <input type="text" name="conpass" class="form-control" placeholder="Confirm Password" id="conpass" autocomplete="off">
          <span id="confrmpass" class="text-danger font-weight-bold"> </span>
        </div>

      
          <button class="btn btn-lg  btn-block text-uppercase" type="submit" name="submit" value="submit"  autocomplete="off" style="background-color: #51A3A3;">Create</button>
                        <hr class="my-4">

              <div class="row-fluid" style="margin-left: 80px;">Already Have Account
              <a href="login.html">Sign In</a>

      </form><br><br>

          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/jquery-ui.js"></script>


<script src="https://kit.fontawesome.com/07b2e0c645.js" crossorigin="anonymous"></script>

  </body>
</html>




<script type="text/javascript">
    

    function validation(){

      var user = document.getElementById('user').value;
      var pass = document.getElementById('pass').value;
      var confirmpass = document.getElementById('conpass').value;
      var mobileNumber = document.getElementById('mobileNumber').value;
      var emails = document.getElementById('emails').value;





      if(user == ""){
        document.getElementById('username').innerHTML =" ** Please fill the username field";
        return false;
      }
      if((user.length <= 2) || (user.length > 20)) {
        document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
        return false; 
      }
      if(!isNaN(user)){
        document.getElementById('username').innerHTML =" ** only characters are allowed";
        return false;
      }







       if(mobileNumber == ""){
        document.getElementById('mobileno').innerHTML =" ** Please fill the mobile Number field";
        return false;
      }
      if(isNaN(mobileNumber)){
        document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
        return false;
      }
      if(mobileNumber.length!=10){
        document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
        return false;
      }



      if(emails == ""){
        document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
        return false;
      }
      if(emails.indexOf('@') <= 0 ){
        document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
        document.getElementById('emailids').innerHTML =" ** . Invalid Position";
        return false;
      }







      if(pass == ""){
        document.getElementById('passwords').innerHTML =" ** Please fill the password field";
        return false;
      }
      if((pass.length <= 5) || (pass.length > 20)) {
        document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
        return false; 
      }


      if(pass!=confirmpass){
        document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
        return false;
      }



      if(confirmpass == ""){
        document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
        return false;
      }




     
    }

  </script>



