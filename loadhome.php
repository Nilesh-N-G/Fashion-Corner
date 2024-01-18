
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


$sql="SELECT * FROM `product_details` ORDER BY rand() LIMIT 0,15";

$mensarray=mysqli_query($conn,$sql);

$o="<div class='container-fluid p-0 pb-2'data-aos='fade-right'
data-aos-duration='2000'
data-aos-offset='300'
style='transform-style: preserve-3d;z-index: -1;'>
  <div class='row row-cols-1 row-cols-md-2 g-4 m-0' style='width: 98.5vw'>
    <div class='col col-lg-12'>
      <div
        id='carouselExampleFade'
        class='carousel slide carousel-fade'
        data-bs-ride='carousel'
      >
      <div class='carousel-inner'>
      <div class='carousel-item active'>
        <img src='images/t3.jpg' class='d-block w-100' style='max-height:70vh !important'>
      </div>
      <div class='carousel-item active'>
      <img src='images/t2.jpg' class='d-block w-100' style='max-height:70vh !important'>
    </div>
    <div class='carousel-item active'>
    <img src='images/t1.jpg' class='d-block w-100' style='max-height:70vh !important'>
  </div>




    </div>
        <button
          class='carousel-control-prev'
          type='button'
          data-bs-target='#carouselExampleFade'
          data-bs-slide='prev'
        >
          <span
            class='carousel-control-prev-icon'
            aria-hidden='true'
          ></span>
          <span class='visually-hidden'>Previous</span>
        </button>
        <button
          class='carousel-control-next'
          type='button'
          data-bs-target='#carouselExampleFade'
          data-bs-slide='next'
        >
          <span
            class='carousel-control-next-icon'
            aria-hidden='true'
          ></span>
          <span class='visually-hidden'>Next</span>
        </button>
      </div>
    </div>
  </div>
</div>";






$o.='</div>';









$o.="<div class='container-fluid'>

<div class='row featurette'>
    <div class='col-md-9 py-5' style='background-color: rgba(238, 238, 238, 0.406);'>
      <h2 class='featurette-heading fw-normal lh-1'>Top Deals on Shirts <span class='text-body-secondary'>It’ll blow your mind.</span></h2>
      <p class='lead'>Welcome to our diverse collection of shirts that combine style, comfort, and quality craftsmanship. Whether you're dressing up for a special occasion, adding to your casual wardrobe, or looking for the ideal work shirt, we've got you covered. Our shirts are designed to make you look and feel your best, no matter the occasion.<br/>Our commitment to quality extends to the materials we use. We offer shirts crafted from premium fabrics, including breathable cotton for warm days, cozy flannel for cooler months, and moisture-wicking blends for active lifestyles.</p>
    </div>
    <div class='col-md-3 text-center'>
        <img class='img-fluid' src='images/shirt1.jpg' alt='' style='height: 18rem;'>

    </div>
  </div>

  <div class='row featurette mt-3'>

    <div class='col-md-3 text-center'>

        <img class='img-fluid' src='images/saree2.jpg' alt='' style='height: 18rem;'>

    </div>
    <div class='col-md-9 py-5'  style='background-color: rgba(238, 238, 238, 0.406);'>
      <h2 class='featurette-heading fw-normal lh-1'>Top Deals on Sarees <span class='text-body-secondary'>It’ll blow your mind.</span></h2>
      <p class='lead'>Welcome to our exquisite collection of sarees, where tradition meets modern style. Sarees have been an epitome of grace and femininity for centuries, and our curated selection showcases the rich heritage and craftsmanship that goes into creating these beautiful garments.<br/>Discover the luxurious world of silk sarees, renowned for their lustrous finish and timeless appeal, suitable for weddings and grand events.</p>
    </div>

  </div>
</div>
";


echo $o;


?>

