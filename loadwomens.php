
<?php
session_start();
if(!isset($_SESSION['uname'])){
  header('location:login.php');
}




$servername="localhost";
$username="root";
$password="";
$database="ecommerce";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("Cannot Connect to database");
}


$sql="SELECT * FROM `product_details` WHERE product_type IN (SELECT `product_type` FROM `product_type` WHERE product_gender = 2 AND `product_type`=4) ORDER BY rand()";

$mensarray=mysqli_query($conn,$sql);

$o="";

$o.='<div class="container-fluid p-0" style="display: flex;flex-wrap: wrap;justify-content: center;">';
while($mensproduct=mysqli_fetch_assoc($mensarray)){

$product_id=$mensproduct['product_id'];
$product_name=$mensproduct['product_name'];
$product_price=$mensproduct['product_price'];
$product_image=$mensproduct['product_image'];

// echo $product_id;
// echo $product_name;
// echo $product_price;
// echo $product_image;





$o.='<div class="card shadow-sm m-3" style="width: 18rem;cursor: pointer;">
<img src="images/'.$product_image.'" class="card-img-top p-3" alt="" style="height: 230pt !important;"  onclick="productdetails('.$product_id.')">
<div class="card-body">
  <h5 class="card-title" style="text-align: center;">'.$product_name.'</h5>
  <p class="card-text" style="text-align: center;">Price : ₹'.$product_price.'<br/></p>
  <div class="d-flex">
    <a class="btn btn-secondary mx-1 cart" product-id="'.$product_id.'"  onclick="addproduct('.$product_id.')">Add to Cart</a>
    <input type="number" class="quantity-input mx-auto" id="'.$product_id.'" value="1" min="1" max="5" style="width:40pt">
    <select name="size" class="mx-auto" style="width:40pt" id="'.$product_id.'size" product-size="'.$product_id.'">
  <option value="volvo">S</option>
  <option value="saab">M</option>
  <option value="mercedes">L</option>
  <option value="audi">XL</option>
</select>
  </div>
</div>
</div>';
}


$sql="SELECT * FROM `product_details` WHERE product_type IN (SELECT `product_type` FROM `product_type` WHERE product_gender = 2 AND `product_type`=5) ORDER BY rand()";

$mensarray=mysqli_query($conn,$sql);


$o.='<div class="container-fluid p-0" style="display: flex;flex-wrap: wrap;justify-content: center;">';
while($mensproduct=mysqli_fetch_assoc($mensarray)){

$product_id=$mensproduct['product_id'];
$product_name=$mensproduct['product_name'];
$product_price=$mensproduct['product_price'];
$product_image=$mensproduct['product_image'];

// echo $product_id;
// echo $product_name;
// echo $product_price;
// echo $product_image;





$o.='<div class="card shadow-sm m-3" style="width: 18rem;cursor: pointer;">
<img src="images/'.$product_image.'" class="card-img-top p-3" alt="" style="height: 230pt !important;" onclick="productdetails('.$product_id.')">
<div class="card-body">
  <h5 class="card-title" style="text-align: center;">'.$product_name.'</h5>
  <p class="card-text" style="text-align: center;">Price : ₹'.$product_price.'<br/></p>
  <div class="d-flex">
    <a class="btn btn-secondary mx-1 cart" product-id="'.$product_id.'"  onclick="addproduct('.$product_id.')">Add to Cart</a>
    <input type="number" class="quantity-input mx-auto" id="'.$product_id.'" value="1" min="1" max="5" style="width:40pt">
    <select name="size" class="mx-auto" style="width:40pt" id="'.$product_id.'size" product-size="'.$product_id.'">
  <option value="volvo">S</option>
  <option value="saab">M</option>
  <option value="mercedes">L</option>
  <option value="audi">XL</option>
</select>
  </div>
</div>
</div>';
}


$sql="SELECT * FROM `product_details` WHERE product_type IN (SELECT `product_type` FROM `product_type` WHERE product_gender = 2 AND `product_type`=8) ORDER BY rand()";

$mensarray=mysqli_query($conn,$sql);


$o.='<div class="container-fluid p-0" style="display: flex;flex-wrap: wrap;justify-content: center;">';
while($mensproduct=mysqli_fetch_assoc($mensarray)){

$product_id=$mensproduct['product_id'];
$product_name=$mensproduct['product_name'];
$product_price=$mensproduct['product_price'];
$product_image=$mensproduct['product_image'];

// echo $product_id;
// echo $product_name;
// echo $product_price;
// echo $product_image;





$o.='<div class="card shadow-sm m-3" style="width: 18rem;cursor: pointer;">
<img src="images/'.$product_image.'" class="card-img-top p-3" alt="" style="height: 230pt !important;" onclick="productdetails('.$product_id.')">
<div class="card-body">
  <h5 class="card-title" style="text-align: center;">'.$product_name.'</h5>
  <p class="card-text" style="text-align: center;">Price : ₹'.$product_price.'<br/></p>
  <div class="d-flex">
    <a class="btn btn-secondary mx-1 cart" product-id="'.$product_id.'"  onclick="addproduct('.$product_id.')">Add to Cart</a>
    <input type="number" class="quantity-input mx-auto" id="'.$product_id.'" value="1" min="1" max="5" style="width:40pt">
    <select name="size" class="mx-auto" style="width:40pt" id="'.$product_id.'size" product-size="'.$product_id.'">
  <option value="volvo">S</option>
  <option value="saab">M</option>
  <option value="mercedes">L</option>
  <option value="audi">XL</option>
</select>
  </div>
</div>
</div>';
}


$o.='</div>';

echo $o;


?>


