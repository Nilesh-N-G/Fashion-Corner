<?php

$servername="localhost";
$username="root";
$password="";
$database="ecommerce";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("Cannot Connect to database");
}

// session_start();
// session_unset();
// session_destroy();

// session_start();









?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fashion Corner</title>
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    /> -->
    <link rel="stylesheet" href="./css/bootstrap-5.2.3.css">
  </head>
  <body class="body" >





  <main class="form-signin w-50 text-center mt-5 m-auto p-auto">
  <form class="px-4 py-3" method="post" id="loginsubmit">
    <img class="mb-4" src="images/logo.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please Login in</h1>
<div class="w-100 mt-5" style="text-align:left;">
<label for="example" class="form-label">Username</label>
    <div class="form-floating my-3">
          <label for="exampleDropdownFormEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="exampleDropdownFormEmail1" name="uname" required>
            <div class="invalid-feedback" id="nouname">Please enter username</div>
            <div class="invalid-feedback" id="invaliduname">Username does not exist</div>
    </div>
    <label for="example" class="form-label">Password</label>
    <div class="form-floating my-2">
    <label for="exampleDropdownFormPassword1" class="form-label"></label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword1" name="pwd" required>
            <div class="invalid-feedback" id="nopwd">Please enter password</div>
            <div class="invalid-feedback" id="invalidpwd">Password is incorrect</div>
    </div>

    </div>


    <button type="submit" class="btn btn-primary my-3 w-100" name="login">Login</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2023-2024</p>
  </form>
</main>




    














      <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    
    <script src="./js/bootstrap-5.2.3.js"></script>
    <script src="./js/jquery.js"></script>

    <script>


      $("#loginsubmit").submit(function () {
        // alert("submitted");
        console.log("submitted");
        var postdata=$("#loginsubmit").serialize();
        $("#invaliduname").removeClass("d-block");
        $("#invalidpwd").removeClass("d-block");
        // alert(postdata);
        $.post("loginvalidate.php",postdata,function(response){
          // alert(response);
          // console.log(response);
          var displaychoice=response;
            // alert(displaychoice);
            if(displaychoice==1)
            {
              $("#invaliduname").addClass("d-block");
            }
            if(displaychoice==2)
            {
              $("#invalidpwd").addClass("d-block");
            }
            if(displaychoice==3)
            {
              window.location.href = "/E-COMMERCE/index.php";
            //   alert("3")
            }
            if(displaychoice==4)
            {
              window.location.href = "/E-COMMERCE/admin.php";
              // alert("4")
            }
        });
        return false;
      });

    </script>


  </body>
</html>
