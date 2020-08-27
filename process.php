<?php

extract($_POST);

// echo $category;

include 'connection.php';

$sql = "SELECT * FROM product WHERE category='$category'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
      ?>
           
        

<div class="col-sm-4 conn d-flex justify-content-center">
    <form action="viewproduct.php" method="post">
              <input type="hidden" name="productid" value="  <?php echo $row['Product_id']; ?> ">
              <input type="hidden" value="<?php echo $row['discription']; ?>">
            <div class="f_p_item">
              <div class="f_p_img">
                <img class="img-fluid" src="photos/ <?php echo $row['path']; ?>" alt="">
                <div class="p_icon">
                  <a href="#">
                      <button type="submit" class="btn2" name="add_to_cart" style="width: 100%;">
                         
                          <i class="fas fa-shopping-cart"></i>
                      </button>
                   
                  </a>
                  <a href="#">
                  <i class="far fa-heart"></i>
                  </a>
                </div>
              </div>
              <a href="#">
                <h4><?php echo $row['name']; ?></h4>
              </a>
              <h5>Rs: <?php echo $row['price']; ?></h5>
            </div>
          </form>
   </div>




       <?php
    }
} 
else {
   echo "0 results";
}




?>