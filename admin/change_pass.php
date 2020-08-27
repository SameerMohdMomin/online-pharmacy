
<?php
  

  include '../connection.php';
 

 
   
  
      $password=$_POST['password'];

        $sql="  UPDATE admin
                      SET password='$password'
                      WHERE admin_id='1';
           " ;


        if ($conn->query($sql) === TRUE) 
        {
          echo "
          	<script>
          	 alert('password change sucessfully')
          	 window.open('dash.php','_self')
          	</script>

          ";	

        }





?>













 <!--  else {
            echo "

                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Something went wrong!',
                      
                    });


            " ;
  } -->