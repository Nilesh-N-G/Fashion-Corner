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


  <!-- modal  -->

  <div class="modal fade text-center" tabindex="-1" id="detailsmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Product Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center" id="modalbody">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal ends  -->


<!-- Item added to card modal  -->


<div class="modal fade" id="itemcart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Item Added</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Item Added to the Cart
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal ends  -->

<!-- Please Select item modal  -->


<div class="modal fade" id="select" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Select an Item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         Please Select an Product
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal ends  -->

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

      <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3" style="margin:0px 40px;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">FC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item" style="cursor: pointer;" onclick="loadhome()">
                <a class="nav-link active" id="home">HOME</a>
              </li>
              <li class="nav-item" style="cursor: pointer;" onclick="loadmens()">
                <a class="nav-link" id="mens">MEN'S</a>
              </li>
              <li class="nav-item" style="cursor: pointer;" onclick="loadwomens()">
                <a class="nav-link" id="womens">
                    WOMEN'S
                </a>
              </li>
              <li class="nav-item" style="cursor: pointer;" onclick="loadallproducts()">
                <a class="nav-link" id="allproducts">ALL PRODUCTS</a>
              </li>
              <li class="nav-item" style="cursor: pointer;" onclick="loadaboutus()">
                <a class="nav-link" id="aboutus" >ABOUT US</a>
              </li>
            </ul>
            <div class="d-flex" role="search">
              <button class="btn btn-outline-primary mx-3" type="submit" onclick="cart()">Cart</button>
              <button class="btn btn-outline-secondary mx-3" type="submit" onclick="logout()">Logout</button>
            </div>
          </div>
        </div>
      </nav>



<div class="container-fluid p-0" id="load">


<div class="container-fluid p-0 pb-2"data-aos="fade-right"
    data-aos-duration="2000"
    data-aos-offset="300"
    style="transform-style: preserve-3d;z-index: -1;">
      <div class="row row-cols-1 row-cols-md-2 g-4 m-0" style="width: 98.5vw">
        <div class="col col-lg-12">
          <div
            id="carouselExampleFade"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/t3.jpg" class="d-block w-100" alt="..." style="max-height:70vh !important"/>
              </div>

              <div class="carousel-item">
                <img src="images/t2.jpg" class="d-block w-100" alt="..." style="max-height:70vh !important" />
              </div>

              <div class="carousel-item">
                <img src="images/t1.jpg" class="d-block w-100" alt="..." style="max-height:70vh !important" />
              </div>


            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleFade"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleFade"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

      </div>
    </div>

    





<div class="container-fluid">

    <div class="row featurette">
        <div class="col-md-9 py-5" style="background-color: rgba(238, 238, 238, 0.406);">
          <h2 class="featurette-heading fw-normal lh-1">Top Deals on Shirts <span class="text-body-secondary">It’ll blow your mind.</span></h2>
          <p class="lead">Welcome to our diverse collection of shirts that combine style, comfort, and quality craftsmanship. Whether you're dressing up for a special occasion, adding to your casual wardrobe, or looking for the ideal work shirt, we've got you covered. Our shirts are designed to make you look and feel your best, no matter the occasion.<br/>Our commitment to quality extends to the materials we use. We offer shirts crafted from premium fabrics, including breathable cotton for warm days, cozy flannel for cooler months, and moisture-wicking blends for active lifestyles.</p>
        </div>
        <div class="col-md-3 text-center">
            <img class="img-fluid" src="images/shirt1.jpg" alt="" style="height: 18rem;">

        </div>
      </div>

      <div class="row featurette mt-3">

        <div class="col-md-3 text-center">

            <img class="img-fluid" src="images/saree2.jpg" alt="" style="height: 18rem;">

        </div>
        <div class="col-md-9 py-5"  style="background-color: rgba(238, 238, 238, 0.406);">
          <h2 class="featurette-heading fw-normal lh-1">Top Deals on Sarees <span class="text-body-secondary">It’ll blow your mind.</span></h2>
          <p class="lead">Welcome to our exquisite collection of sarees, where tradition meets modern style. Sarees have been an epitome of grace and femininity for centuries, and our curated selection showcases the rich heritage and craftsmanship that goes into creating these beautiful garments.<br/>Discover the luxurious world of silk sarees, renowned for their lustrous finish and timeless appeal, suitable for weddings and grand events.</p>
        </div>

      </div>
    </div>













      






</div>













    <div class="container-fluid" style="background-color: #fafdfd">
      <div class="container">
        <footer class="pt-4 mt-3 pt-md-5 border-top">
          <div class="row">
            <div class="col-12 col-md">
              <small class="d-block mb-3 text-body-secondary"
                >© 2022–2023</small
              >
            </div>
            <div class="col-6 col-md">
              <h5>Quick Links</h5>
              <ul class="list-unstyled text-small">
                <li class="mb-1" onclick="loadmens()">
                  <a class="link-secondary text-decoration-none" href="#"
                    >MEN'S</a
                  >
                </li>
                <li class="mb-1" onclick="loadwomens()">
                  <a class="link-secondary text-decoration-none" href="#"
                    >WOMEN'S</a
                  >
                </li>
                <li class="mb-1" onclick="loadallproducts()">
                  <a class="link-secondary text-decoration-none" href="#"
                    >ALL PRODUCTS</a
                  >
                </li>
              </ul>
            </div>
        
            <div class="col-6 col-md">
              <h5>Contact Us</h5>
              <ul class="list-unstyled text-small">
                <li class="mb-1">
                  <a class="link-secondary text-decoration-none" href="#"
                    ><i style="font-size: 15px" class="fa">&#xf095;</i> : 7090026528</a
                  >
                </li>
                <li class="mb-1">
                  <a class="link-secondary text-decoration-none" href="#"
                    ><i style="font-size: 15px" class="fa">&#xf0e0;</i> : fashioncorner@email.com</a
                  >
                </li>
                <li class="mb-1">
                  <a class="link-secondary text-decoration-none" href="#"
                    ><i style="font-size: 24px" class="fas">&#xf1e4;</i> : 08361 652148</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="container py-1" style="border-top: 1px solid #242424">
            <p class="text-center">
              Copyright © 2023 | All Rights Reserved
            </p>
          </div>
        </footer>
      </div>
    </div>






    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script> -->
    <script src="./js/bootstrap-5.2.3.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/html2pdf.js"></script>
    
    <script>
      const selectedProducts = [];
      const dict = {};
      function loadmens(){
        $.ajax({
        url: "loadmens.php",
        type: "post",
        data: {},
        success: function(data){
            $('.nav-link').removeClass("active");
            $('#mens').addClass("active");
            $("#load").html(data);
        },
      });
      }


      function loadwomens(){
        $.ajax({
        url: "loadwomens.php",
        type: "post",
        data: {},
        success: function(data){
            $('.nav-link').removeClass("active");
            $('#womens').addClass("active");
            $("#load").html(data);
        },
      });
      }

      function loadaboutus(){
        $.ajax({
        url: "loadaboutus.php",
        type: "post",
        data: {},
        success: function(data){
            $('.nav-link').removeClass("active");
            $('#aboutus').addClass("active");
            $("#load").html(data);
        },
      });
      }

      function loadallproducts(){
        $.ajax({
        url: "loadallproducts.php",
        type: "post",
        data: {},
        success: function(data){
            $('.nav-link').removeClass("active");
            $('#allproducts').addClass("active");
            $("#load").html(data);
        },
      });
      }


      function loadhome(){
        $.ajax({
        url: "loadhome.php",
        type: "post",
        data: {},
        success: function(data){
            $('.nav-link').removeClass("active");
            $('#home').addClass("active");
            $("#load").html(data);
        },
      });
      }

      function addproduct(a){
        
        // alert("Item Added to the Cart");
        $("#itemcart").modal("show");
        const n=document.getElementById(a).value;
        const s=document.getElementById(a+"size");
        var size = $( "#"+a+"size option:selected" ).text();
        // alert(size);
        if (a in dict){
          dict[a] = dict[a]+","+n+"*"+size;
        }
        else{
          dict[a] =n+"*"+size;
        }
        
        // alert(a+"="+dict[a]);
        for(var i=0;i<n;i++)
        {
          selectedProducts.push(a);
        }
        

      }

      function cart(){
        if (selectedProducts.length == 0){
          // alert("Please Select a Product");
          $("#select").modal("show");
        }
        else{
        $.ajax({
        url: "cart.php",
        type: "post",
        data: { selectedProducts,dict },
        success: function(data){
            $('.nav-link').removeClass("active");
            $('#home').addClass("active");
            $("#load").html(data);
        },
      });}
      
      }

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

      function generatebill(){
        var fname = document.getElementById("firstName").value;
        var lname = document.getElementById("lastName").value;
        var email = document.getElementById("email").value;
        var address = document.getElementById("address").value;
        // alert(fname+" "+lname+" "+email+" "+address)
        var name=fname+" "+lname;
        $.ajax({
        url: "generatebill.php",
        type: "post",
        data: {selectedProducts,dict,name,email,address},
        success: function(data){
          var printWindow = window.open('', '', 'height=1200,width=1200');
          printWindow.document.write(data);
          printWindow.document.close();
          printWindow.print();

        },
      });
      var fname = document.getElementById("firstName").value;
      var lname = document.getElementById("lastName").value;
      var email = document.getElementById("email").value;
      var address = document.getElementById("address").value;
      // alert(fname+" "+lname+" "+email+" "+address)
      var name=fname+" "+lname;
      }



      function increasenumber(){

        var a=document.getElementById('').value;
        var b=a+1
        alert(b)
        n.innerHTML=b;


      }

      function productdetails(id){
        // alert("clicked")
        $.ajax({
          url: "productdetails.php",
          type: "post",
          data: { id },
          success: function (data, success) {
            $("#modalbody").html(data);
            $("#detailsmodal").modal("show");
            //  $("#mytable").DataTable();
          },
        });

      }





    </script>
  </body>
</html>


<?php


?>