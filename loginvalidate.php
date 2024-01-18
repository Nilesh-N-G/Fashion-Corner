<?php


$servername="localhost";
$username="root";
$password="";
$database="ecommerce";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("Cannot Connect to database");
}



$input = json_encode($_POST);

$obj = json_decode($input,true);
$a='uname';
$uname = $obj[$a];
$getpwd=$obj['pwd'];
$invaliduname=1;
$invalidpwd=2;
$validuname=3;
$validaname=4;




    



if($_SERVER['REQUEST_METHOD']=='POST')
{
    $sql="SELECT * FROM users WHERE username='$uname'";
    $result=mysqli_query($conn,$sql);

    $num=mysqli_num_rows($result);
    if($num>0)
    {
        $userarray=mysqli_fetch_assoc($result);
        $pwd=$userarray['password'];
        if($pwd==$getpwd)
        {
            // To detroy each and every session 
              session_start();
              session_unset();
              session_destroy();

              session_start();
              $_SESSION['uname']=$uname;
              $utype=$userarray['utype'];
              if($utype==0){
                echo $validuname;
              }
              else{
                echo $validaname;
              }
              
        }
        else
        {
            echo $invalidpwd;
            // echo "Invalid Password";
        }
    }
    else{
        // echo "Invalid Credentials";
        echo $invaliduname;
    }
}




// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $input = json_encode($_POST);
    
//     $obj = json_decode($input,true);
//     $a='usn';
//     $getusn = $obj[$a];
    
//     $email=$obj['uemail'];
//     $phone=$obj['uphone'];
//     $address=$obj['uaddress'];
    
//     echo $email;
//     echo $phone;
//     echo $address;
    



?>

 