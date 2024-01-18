
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

extract($_POST);

$id=$_POST['id'];

$sql="SELECT * FROM `product_details` WHERE product_id=$id";

$mensarray=mysqli_query($conn,$sql);

$mensproduct=mysqli_fetch_assoc($mensarray);

  $product_id=$mensproduct['product_id'];
  $product_name=$mensproduct['product_name'];
  $product_price=$mensproduct['product_price'];
  $product_image=$mensproduct['product_image'];
  $product_desc=$mensproduct['product_desc'];


$o="";




$o.='<center> <div class="card shadow-sm m-0 p-0" style="width: 18rem;cursor: pointer;">
<img src="images/'.$product_image.'" class="card-img-top p-3" alt="" style="height: 230pt !important;">
<div class="card-body">
  <h5 class="card-title" style="text-align: center;">'.$product_name.'</h5>
  <p class="card-text" style="text-align: center;">Price : ₹'.$product_price.'<br/></p>
</div>
'.$product_desc.'
</div>
</center>
';

echo $o;

?>