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

$selectedProducts=$_POST['selectedProducts'];

$selectedProductsSet=array_count_values($selectedProducts);

$product_count=count($selectedProductsSet);

$product_count_each=0;

$dict=$_POST['dict'];






$total=0;

$o="";
$o.='<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Checkout Page</h2>
      <p class="lead">You may request a return within 7 days of receiving your order.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last" id="invoice">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">'.$product_count.'</span>
        </h4>
        <ul class="list-group mb-3">';

        foreach($selectedProductsSet as $x => $x_value) {
      

            $sql="SELECT * FROM `product_details` WHERE product_id=$x";
            $productarray=mysqli_query($conn,$sql);
            $productdetails=mysqli_fetch_assoc($productarray);

            $product_name=$productdetails['product_name'];
            $product_price=$productdetails['product_price'];

            $total+=$product_price * $x_value;
            $product_count_each+=1;

        
          $o.='<li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">'.$product_name.'</h6>
            </div>
            <span class="text-body-secondary">'.$x_value.'&nbsp; &nbsp; &nbsp; ₹'.$product_price*$x_value.'</span>
          </li>';
        }
          $o.='<li class="list-group-item d-flex justify-content-between bg-body-tertiary">
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (INR)</span>
            <strong>'.$product_count_each.'&nbsp; &nbsp; &nbsp; ₹'.$total.'</strong>
          </li>';
        $o.='</ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" id="billform">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" >
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" >
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>


            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" >
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" required="" >
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" >
            </div>




          </div>

          <button class="w-100 btn btn-primary btn-lg mt-5" type="button"  onclick="generatebill()">Buy</button>
        </form>
      </div>
    </div>
  </main>

</div>';


echo $o;





?>