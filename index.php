<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGU Hotal Booking Online  - Home</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
     <?php require('inc/links.php'); ?>
<style>

    .availibility-form{
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }
    @media screen and (max-width: 575px){
      .availibility-form{
           margin-top: 25px;
          
           position: relative;
           padding: 0 35px;
    }
   
</style>

</head>
<body class="bg-light">
<?php require('inc/header.php'); ?>

<div class="container-fluid  px-lg-4 mt-4">
   <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/Rooms/2.png" />
      </div>
      <div class="swiper-slide">
        <img src="images/Rooms/3.png" />
      </div>
      <div class="swiper-slide">
        <img src="images/Rooms/4.png" />
      </div>
      <div class="swiper-slide">
        <img src="images/Rooms/5.png" />
      </div>
      <div class="swiper-slide">
        <img src="images/Rooms/6.png" />
      </div>
      <div class="swiper-slide">
        <img src="images/Rooms/7.png" />
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

    
  
</div>

<!--check avalability form -->
   <div class="container availibility-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking availibility</h5>
      <form>
        <div class="row algin-items-end">
          <div class="col-lg-3 mb-3">
             <label class="form-label" style="font-weight: 500;">Check-in</label>
             <input type="date" class="form-control shadow-none">
          </div>
           <div class="col-lg-3 mb-3">
             <label class="form-label" style="font-weight: 500;">Check-out</label>
             <input type="date" class="form-control shadow-none">
          </div>
           <div class="col-lg-3 mb-3">
             <label class="form-label" style="font-weight: 500;">Adult</label>
            <select class="form-select shadow-none" >
         
               <option value="1">One</option>
               <option value="2">Two</option>
               <option value="3">Three</option>
            </select>
          </div>
           <div class="col-lg-2 mb-3">
             <label class="form-label" style="font-weight: 500;">Children</label>
            <select class="form-select shadow-none" >
       
               <option value="1">One</option>
               <option value="2">Two</option>
               <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-1 mb-lg-3  mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div> 
</div>

<!--Our Rooms-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
       <div class="card border-0 shadow" style=" max-width: 350px; margin: auto;">
         <img src="images/Room/room.jpg" class="card-img-top">
         <div class="card-body">
         <h5>Simple Room</h5>
          <h6 class="mb-4">5000Rs Per Night</h6>
         <div class="features mb-4">
           <h5 class="mb-1">Features</h5>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               1 Room
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               1 Bathroom
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               1 Window Room
           </span>
         </div>
         <div class="Facilities mb-4">
             <h5 class="mb-1">Facilities</h5>
              <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Free Wifi
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Ac
           </span>
         </div>
         <div class="rating mb-4">
           <h5 class="mb-1">Rating</h5>
            <span class="badge rounded-pill bg-dark">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn  text-white custom-bg shadow-none">Book Now</a>
           <a href="#" class="btn btn-outline-dark  shadow-none">More Detail</a>
         

         </div>   
      </div>
     </div>
    </div>

     <div class="col-lg-4 col-md-6 my-3">
       <div class="card border-0 shadow" style=" max-width: 350px; margin: auto;">
         <img src="images/Room/room1.png" class="card-img-top">
         <div class="card-body">
         <h5>special Room</h5>
          <h6 class="mb-4">7000Rs Per Night</h6>
         <div class="features mb-4">
           <h5 class="mb-1">Features</h5>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               2 BedRoom
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               2 Bathroom
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               2 sofa
           </span>
         </div>
         <div class="Facilities mb-4">
             <h5 class="mb-1">Facilities</h5>
              <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Free Wifi
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Ac
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Tv
           </span>
         </div>
         <div class="rating mb-4">
           <h5 class="mb-1">Rating</h5>
            <span class="badge rounded-pill bg-dark">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn  text-white custom-bg shadow-none">Book Now</a>
           <a href="#" class="btn btn-outline-dark  shadow-none">More Detail</a>
         

         </div>   
      </div>
     </div>
    </div>

     <div class="col-lg-4 col-md-6 my-3">
       <div class="card border-0 shadow" style=" max-width: 350px; margin: auto;">
         <img src="images/Room/room3.png" class="card-img-top">
         <div class="card-body">
         <h5>Luxary Room</h5>
          <h6 class="mb-4">10000Rs Per Night</h6>
         <div class="features mb-4">
           <h5 class="mb-1">Features</h5>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               1 Room
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               1 Bathroom
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
              1 Balkoni
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
              2 sofa
           </span>
            
         </div>
         <div class="Facilities mb-4">
             <h5 class="mb-1">Facilities</h5>
              <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Free Wifi
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Ac
           </span>
           <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Heater
           </span>
           <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Tv
           </span>
         </div>
         <div class="rating mb-4">
           <h5 class="mb-1">Rating</h5>
            <span class="badge rounded-pill bg-dark">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn   text-white custom-bg shadow-none">Book Now</a>
           <a href="#" class="btn btn-outline-dark  shadow-none">More Detail</a>
         

         </div>   
      </div>
     </div>
    </div>


   <div class="col-lg-12 text-center mg-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none   shadow-none">More Rooms >>>></a>

   </div>
  </div>
</div>

<!-- Our Faselities-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
      <img src="images/Features/1.PNG" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
      <img src="images/Features/msaj.svg" width="80px">
      <h5 class="mt-3">Masaj </h5>
    </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
      <img src="images/Features/Ac.svg" width="80px">
      <h5 class="mt-3">Ac</h5>
    </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
      <img src="images/Features/heater.svg" width="80px">
      <h5 class="mt-3">Heater</h5>
    </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
      <img src="images/Features/tv.svg" width="80px">
      <h5 class="mt-3">TV</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
     <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none shadow-none">More Facilities >>>></a>
    </div>
  </div>
</div>


<!-- Our Testimonials-->
 
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Testimonials</h2>
<div class="container-testimon">
  
</div>
<div class="container mt-5">
   <div class="swiper Swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4f">
      <div class="profile d-flex algin-items-center mb-3">
        <img src="1.PNG" width="30px">
        <h6 class="m-0 ms-2"> Random User</h6>
      </div>
      <p>
         ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididuquip ex ea commodo
        conseqcupidatat non
      </p>
      <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide bg-white p-4f">
      <div class="profile d-flex algin-items-center mb-3">
        <img src="1.PNG" width="30px">
        <h6 class="m-0 ms-2"> Random User</h6>
      </div>
      <p>
         ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididuquip ex ea commodo
        conseqcupidatat non
      </p>
      <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide bg-white p-4f">
      <div class="profile d-flex algin-items-center mb-3">
        <img src="1.PNG" width="30px">
        <h6 class="m-0 ms-2"> Random User</h6>
      </div>
      <p>
         ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididuquip ex ea commodo
        conseqcupidatat non
      </p>
      <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
     <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none shadow-none">Know More >>>></a>
    </div>
</div>


<!-- Reach Us-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="350px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.753957340362!2d74.48084567442837!3d31.58579434390882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391911e3f4f76949%3A0x4851aba0418876ba!2sSky%20Land%20Water%20Park%20Man%20Made%20Lake!5e0!3m2!1sen!2s!4v1705806757425!5m2!1sen!2s" loading="lazy" ></iframe>
    </div>
     <div class="col-lg-4 md-4">
      <div class="bg-white p-4  rounded mb-4">
        <h5>Contach Us</h5>
        <a href=" tel :+92 316 255 4975" class="d-inline-block mb-3 text-decoration-none text-dark">      <i class="bi bi-telephone-fill"></i>       +92 316 255 4975
        </a>
      </div>
       <div class="bg-white p-4  rounded mb-4">
        <h5>Follow Us</h5>
        <a href="#" class="d-inline-block mb-2">    
         <span class="badge bg-light  text-dark fs-6 p-2">
             <i class="bi bi-twitter me-1"></i> Twitter
       </span>
        </a><br>
         <a href="#" class="d-inline-block mb-2">    
         <span class="badge bg-light  text-dark fs-6 p-2">
             <i class="bi bi-facebook m2-1"></i> Facebook
       </span>
        </a><br>
         <a href="#" class="d-inline-block mb-2">    
         <span class="badge bg-light  text-dark fs-6 p-2">
             <i class="bi bi-instagram me-1"></i> Instagram
       </span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Footer-->

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
    var swiper = new Swiper(".Swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
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