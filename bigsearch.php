<?php

extract($_POST);

 

$servername = "localhost";
$username = "root";
$password = "";
$database="pharma";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

$sql = "SELECT * FROM product where name  like '%" .$_POST['category1']. "%' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo"

  
        
      ";
    while($row = $result->fetch_assoc()) 
    {
      
      
      ?>	
           
           
			  
            			    	
            
                
                 
    <div class="col-sm-4 conn  d-flex justify-content-center">
      <form action="viewproduct.php" method="post">


              <input type="hidden" name="productid" value="  <?php echo $row['Product_id']; ?> ">
              <input type="hidden" value="<?php echo $row['discription']; ?>">



         <div class="card p-2" style="width: 15rem;">
              <img class="card-img-top" src="photos/ <?php echo $row['path']; ?>">
              <div class="card-body">
              <p class="card-text text-center"><?php echo $row['name']; ?></p>
                 <button type="submit" class="btn btn-success" name="add_to_cart" style="width: 100%;">Add To Cart</button>
              
                 
              </div>
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