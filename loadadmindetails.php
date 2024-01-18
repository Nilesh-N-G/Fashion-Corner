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

$o="";



$sql="SELECT * FROM product_details WHERE product_type=1";
$shirtarray=mysqli_query($conn,$sql);
$shirt=mysqli_num_rows( $shirtarray );




$sql="SELECT * FROM product_details WHERE product_type=2";
$pantarray=mysqli_query($conn,$sql);
$pant=mysqli_num_rows( $pantarray );




$sql="SELECT * FROM product_details WHERE product_type=4";
$sareearray=mysqli_query($conn,$sql);
$saree=mysqli_num_rows( $sareearray );





$sql="SELECT * FROM product_details WHERE product_type=5";
$toparray=mysqli_query($conn,$sql);
$top=mysqli_num_rows( $toparray );




$sql="SELECT * FROM product_details WHERE product_type=7";
$jackettarray=mysqli_query($conn,$sql);
$jacket=mysqli_num_rows( $jackettarray );




$sql="SELECT * FROM product_details WHERE product_type=8";
$kurtiarray=mysqli_query($conn,$sql);
$kurti=mysqli_num_rows( $kurtiarray );

// <div class="card shadow m-3" style="width: 18rem;min-height: 9rem;">
// <div class="card-body">
//   <h5 class="card-title">Add Product</h5>
//   <button type="button" class="btn btn-secondary mt-3" onclick="addproduct()">Add</button>
// </div>
// </div>

// <div class="card shadow m-3" style="width: 18rem;min-height: 9rem;">
// <div class="card-body">
//   <h5 class="card-title">Logout</h5>
//   <button type="button" class="btn btn-secondary mt-3" onclick="logout()">Logout</button>
// </div>
// </div>


$o.='

<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3" style="margin:0px 40px;">
<div class="container-fluid">
<a class="navbar-brand" href="#">FC</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item" style="cursor: pointer;" >
      <center><a class="nav-link active" id="home">DASHBOARD</a></center>
      </li>
      
    </ul>
    <div class="d-flex" role="search">
      
      <button class="btn btn-outline-secondary mx-3" type="submit" onclick="logout()">Logout</button>
    </div>
  </div>
</div>
</nav>


<div class="container-fluid">
<div class="container-fluid d-flex text-center" style="flex-wrap: wrap !important;justify-content: center;">




      <div class="card shadow m-3 p-3" style="width: 18rem;min-height: 9rem;">
        <div class="card-body">
          <h5 class="card-title">Shirts Available</h5>
          <h5 class="card-subtitle mb-2 text-body-secondary"><strong>Types :</strong> 8</h5>
          <h5 class="card-subtitle mb-2 text-body-secondary"><strong>Quantity:</strong> 5</h5>
          <p class="card-text">Shirts are a versatile and essential piece of clothing for any wardrobe. They can be worn for a variety of occasions, from casual to formal, and can be dressed up or down depending on the occasion. Shirts are also available in a wide variety of styles, colors, and fabrics, so there is a shirt to suit everyone</p>
        </div>
      </div>


      <div class="card shadow m-3 p-3" style="width: 18rem;min-height: 9rem;">
        <div class="card-body">
          <h5 class="card-title">Pants Available</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Types :</strong> 8</h6>
          <h5 class="card-subtitle mb-2 text-body-secondary"><strong>Quantity:</strong> 5</h5>
          <p class="card-text">Jeans are a wardrobe staple for many people, and for good reason. They are versatile, comfortable, and durable. Jeans can be dressed up or down, and they can be worn for a variety of occasions, from running errands to going out on the town.</p>
        </div>
      </div>

      <div class="card shadow m-3 p-3" style="width: 18rem;min-height: 9rem;">
        <div class="card-body">
          <h5 class="card-title">Jackets Available</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Types :</strong> 8</h6>
          <h5 class="card-subtitle mb-2 text-body-secondary"><strong>Quantity:</strong> 5</h5>
          <p class="card-text">Jackets are a versatile type of outerwear that can be worn for a variety of occasions. They can be casual or formal, and they can be made from a variety of materials, including denim, leather, nylon, and polyester.</p>
        </div>
      </div>
      
      <div class="card shadow m-3 p-3" style="width: 18rem;min-height: 9rem;">
        <div class="card-body">
          <h5 class="card-title">Sarees Available</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Types :</strong> 8</h6>
          <h5 class="card-subtitle mb-2 text-body-secondary"><strong>Quantity:</strong> 5</h5>
          <p class="card-text">saree (also spelled saree or sari) is a womens garment from the Indian subcontinent, that consists of an unstitched stretch of woven fabric arranged over the body as a robe, with one end attached to the waist, while the other end rests over one shoulder a stole (shawl).</p>
        </div>
      </div>


      <div class="card shadow m-3 p-3" style="width: 18rem;min-height: 9rem;">
        <div class="card-body">
          <h5 class="card-title">Tops Available</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"> <strong>Types :</strong> 8</h6>
          <h5 class="card-subtitle mb-2 text-body-secondary"><strong>Quantity:</strong> 5</h5>
          <p class="card-text">Womens tops are a versatile and essential part of any wardrobe. They can be dressed up or down, depending on the occasion. There are many different types of womens tops available, from basic tees to dressy blouses.</p>
        </div>
      </div>


      <div class="card shadow m-3 p-3" style="width: 18rem;min-height: 9rem;">
        <div class="card-body">
          <h5 class="card-title">Kurtis Available</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Types :</strong> 8</h6>
          <h5 class="card-subtitle mb-2 text-body-secondary"><strong>Quantity:</strong> 5</h5>
          <p class="card-text">Kurtis are a versatile piece of clothing that can be worn for a variety of occasions. They can be dressed up or down, and can be worn to work, school, or out on the town. Kurtis are also popular for festivals and other special occasions.</p>
        </div>
      </div>

      

     

</div>
<div class="alert mt-4 alert-dark text-center">
    Products Available
  </div>

  </div>';



  $sql="SELECT * FROM `product_details` ORDER BY rand()";

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

</div>
</div>';
}


$o.='</div>';

  echo $o;

?>


<script>


function logout(){
        $.ajax({
        url: "logout.php",
        type: "post",
        data: {},
        success: function(data){
          window.location.href = "/E-COMMERCE/login.php";
        },
      });
      }

</script>