<?php 

    if(isset($_POST['title']))
    {
        include "db.php";

        $title=mysqli_real_escape_string($db,$_POST['title']);
        $message=mysqli_real_escape_string($db,$_POST['message']);

        $query="INSERT INTO messages (message_title,message_desc) VALUES('$title','$message')";
        $result=mysqli_query($db,$query);
        if(!$result)
        {
            die("THIS WENT BAD". mysqli_error($db));
         }
    }


?>