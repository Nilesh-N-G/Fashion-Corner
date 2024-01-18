<?php
session_start();
if(!isset($_SESSION['uname'])){
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fashion Corner</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/bootstrap-5.2.3.css">
    <style>
       *{
        font-family: 'Times New Roman', Times, serif;
       }
       .card:hover{
    transform: translate(1.1);
  }
    </style>
  </head>
  <body style="margin: 0;padding: 0;">


  <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="text" class="form-control" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="text" class="form-control" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="text" class="form-control" id="exampleFormControlInput1">
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>











  <div class="container-fluid mt-1 p-0 logo" style="display: flex;
    justify-content: center !important;">

        <div class="row" style="width: fit-content;">



            <div class="col-sm-9 p-0 m-0 cname" style="width: fit-content;display: flex;
            align-items: center;">

                <h6 class="p-0 mt-4" style="width: fit-content;"> 
                    FASHION CORNER
                </h6>

            </div>

            <div class="col-sm-3 p-0 m-0" style="width: fit-content; height: fit-content;">

                <img src="images/logo.jpg" alt="" width="100vw">

            </div>

        </div>

    </div>

  <div class="container-fluid" id="load">

  </div>


  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script> -->
    <script src="./js/bootstrap-5.2.3.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/html2pdf.js"></script>
    <script>
    $( document ).ready(function() {

        $.ajax({
        url: "loadadmindetails.php",
        type: "post",
        data: {},
        success: function(data){
            $("#load").html(data);
        },
      });

    });

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

</body>
</html>

