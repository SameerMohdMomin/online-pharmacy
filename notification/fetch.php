<?php

include "db.php";

if(isset($_POST['option']))
{
     if($_POST['option']!='')
    {
        $update="UPDATE messages SET message_status=1 WHERE message_status=0";
        mysqli_query($db,$update);
    }
    $query="SELECT * FROM messages ORDER BY message_id DESC ";
    $result=mysqli_query($db,$query);
    $output='';
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $output .="

            <li>
            <a href='#'>
                <strong>".$row['message_title']."</strong>
                <small><em>".$row['message_title']."</em></small>
            </a>
            </li>
            ";
        }
    }
    else
    {
        $output="<li><a href='#' class=''>You have 0 notifications</a></li>";
    }

    $status_query="SELECT * FROM messages WHERE message_status=0";
    $result_query=mysqli_query($db,$status_query);
    $count=mysqli_num_rows($result_query);
    $data=array(
        'notification'=>$output,
        'unreadNotification'=>$count
    );

    echo json_encode($data);
    
}