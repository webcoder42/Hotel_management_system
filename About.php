<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGU Hotal Booking Online - About</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
     <?php require('inc/links.php'); ?>

<style type="text/css">
  .box:hover{
    border-top-color: var(--teel) !important ;
    transform: scale(1.03);
    transition: all 0.3s;
  }
</style>
</head>
<body class="bg-light">
<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
 <h2 class="fm-bold h-font text-center">About Us</h2>
 <div class="h-line bg-dark"></div>
 <p class="text-center mt-3">
    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 </p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-2">
      <h5>About LGU Hotel </h5>
      <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
     <div class="col-lg-5 col-md-5 mb-4 order-1">
     <img src="images/About/my.PNG" class="w-100">
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/carsoul/hotel.svg" width="70px">
        <h4>100 + Rooms</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/carsoul/Customers.svg" width="70px">
        <h4>200+Customers</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/carsoul/rating.svg" width="70px">
        <h4>150 + Rating</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/carsoul/staff.svg" width="70px">
        <h4>200 + Staff</h4>
      </div>
    </div>
  </div>
</div>

<h4 class="my-5 fw-bold text-center h-font">Management Team</h4>

<div class="container px-4">
   <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white rounded text-center overflow-hidden">
        <img src="images/About/bilal.jpg" class="w-100">
        <h4>Person 1</h4>
      </div>
       <div class="swiper-slide bg-white rounded text-center overflow-hidden">
        <img src="images/About/bilal.jpg" class="w-100">
        <h4>Person 1</h4>
      </div>
       <div class="swiper-slide bg-white rounded text-center overflow-hidden">
        <img src="images/About/bilal.jpg" class="w-100">
        <h4>Person 1</h4>
      </div>
       <div class="swiper-slide bg-white rounded text-center overflow-hidden">
        <img src="images/About/bilal.jpg" class="w-100">
        <h4>Person 1</h4>
      </div>
       <div class="swiper-slide bg-white rounded text-center overflow-hidden">
        <img src="images/About/bilal.jpg" class="w-100">
        <h4>Person 1</h4>
      </div>
       <div class="swiper-slide bg-white rounded text-center overflow-hidden">
        <img src="images/About/bilal.jpg" class="w-100">
        <h4>Person 1</h4>
      </div>
     </div>
    <div class="swiper-pagination"></div>
  </div>
</div>



<?php require('inc/footer.php'); ?>



 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView:4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
      320:{
        slidesPerView:1,
      },
       640:{
        slidesPerView:1,
      },
       768:{
        slidesPerView:2,
      },
       1024:{
        slidesPerView:3,
      },
      }
    });
  </script>
</body>
</html>   