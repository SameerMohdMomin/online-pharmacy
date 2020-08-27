<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
    <title>notifications</title>
  </head>
  <body>
    

  <div class="container mt-5">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <span class="badge badge-light count"></span>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell text-light"></i>
           </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              
          </ul>
        </li>
        </ul>
        </div>
      </nav>
  </div>


    <div class="container mt-5">
      <form method="post" id="message_form">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name='title' class="form-control" id="title">
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea name='message' class="form-control" id="message" rows="3" style="resize:none"></textarea>
          </div>
          <div class="form-group">
              <input type="submit" name="post" id="post" class="btn btn-primary" value="Submit Message">
          </div>  


      </form>
    </div>











    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
      if($('#title').val()!='' && $('#message').val()!='' )
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
  </body>
</html>