<?php

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

// $formdetails=$_POST['postdata'];

$selectedProductsSet=array_count_values($selectedProducts);

$product_count=count($selectedProductsSet);

$product_count_each=0;


$dict=$_POST['dict'];

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];





$total=0;

$o="";
$o.='<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.</title>
  </head>
  <body style="margin: 0;padding: 0;">
  <table style="border-collapse: collapse;
border: 1px solid black;justify-self: center;align-self: center;" class="mx-auto">
<tr style="border-collapse: collapse;border: 1px solid black;"><th class="text-center p-3" style="border-collapse: collapse;
  border: 1px solid black;" colspan="5">Fashion Corner</th></tr>
  <tr style="border-collapse: collapse;border: 1px solid black;text-align: left;"><td class="p-3" style="border-collapse: collapse;
    border: 1px solid black;" colspan="5">Name : '.$name.'<br/>Email : '.$email.'<br/>Address : '.$address.'<br/></td></tr>
    <tr style="border-collapse: collapse;
    border: 1px solid black;">
        <th class="p-3" style="border-collapse: collapse;
        border: 1px solid black;">
            Particulars
        </th>
        <th class="p-3" style="border-collapse: collapse;
        border: 1px solid black;">
            Size
        </th>
        <th class="p-3" style="border-collapse: collapse;
        border: 1px solid black;">
            Total Qty
        </th>
        <th class="p-3" style="border-collapse: collapse;
        border: 1px solid black;">
            Rate
        </th>
        <th class="p-3" style="border-collapse: collapse;
        border: 1px solid black;">
            Price
        </th>
    </tr>';

        foreach($selectedProductsSet as $x => $x_value) {
      

            $sql="SELECT * FROM `product_details` WHERE product_id=$x";
            $productarray=mysqli_query($conn,$sql);
            $productdetails=mysqli_fetch_assoc($productarray);

            $product_name=$productdetails['product_name'];
            $product_price=$productdetails['product_price'];

            $total+=$product_price * $x_value;
            $product_count_each+=1;

        
          $o.='<tr style="border-collapse: collapse;
          border: 1px solid black;">
              <td style="border-collapse: collapse;
              border: 1px solid black;">
                  '.$product_name.'
              </td>
              <td style="border-collapse: collapse;
              border: 1px solid black;">
                  '.$dict[$x].'
              </td>
              <td style="border-collapse: collapse;
              border: 1px solid black;">
                  '.$x_value.'
              </td>
              <td style="border-collapse: collapse;
              border: 1px solid black;">
              ₹ '.$product_price.'
              </td>
              <td style="border-collapse: collapse;
              border: 1px solid black;">
              ₹ '.$product_price*$x_value.'
              </td>
          </tr>';
        }


        $o.='<tr style="border-collapse: collapse;
        border: 1px solid black;">
        <td style="border-collapse: collapse;
            border: 1px solid black;" colspan="2">
                <strong class="me-auto">TOTAL(INR)</strong>
            </td>
            <td style="border-collapse: collapse;
            border: 1px solid black;" colspan="3">
                <strong class="">Qty '.$product_count_each.'&nbsp;&nbsp;&nbsp;</strong><strong>Total ₹'.$total.'</strong>
            </td>
        </tr></table></body>
        </html>';


        echo $o;



?>