<?php

extract($_POST);



include 'connection.php';

$sql = "SELECT * FROM blog where category='$category'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
      ?>
           
        

       

 <div class="col-md-4">
    <div>
      <form action="viewproduct.php" method="post">


              <input type="hidden" name="productid" value="  <?php echo $row['blog_id']; ?> ">
              <input type="hidden" value="<?php echo $row['discription']; ?>">



         <div class="card p-2" style="width: 15rem;">
              <img class="card-img-top" src="photos/ <?php echo $row['path']; ?>">
              <div class="card-body">
              <p class="card-text text-center"><?php echo $row['title']; ?></p>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalScrollable"  style="background-color: #87BBA2; width: 100%;">More Info</button>
              </div>
        </div>  
      </form>
    </div>
</div>




   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle"><?php echo $row['title']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $row['discription']; ?>
      </div>
    </div>
  </div>
</div>        




       <?php
    }
} 
else {
   echo "0 results";
}




?>