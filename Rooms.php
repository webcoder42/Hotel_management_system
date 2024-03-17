<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGU Hotal Booking Online - Room </title>
   

     <?php require('inc/links.php'); ?>


</head>
<body class="bg-light">
<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
 <h2 class="fm-bold h-font text-center">Our Rooms</h2>
 <div class="h-line bg-dark"></div>
 
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
      <div class="container-fluid flex-lg-column text-items-stretch">
      <h4 class="mt-2">Filter</h4>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#FilterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="FilterDropdown">
      <div class="border bg-light rounded p-3 ab-3">
        <h5 class="mb-3">Check Avaliability</h5>
             <label class="form-label">Check-in</label>
             <input type="date" class="form-control shadow-none mb-4">
              <label class="form-label">Check-in</label>
             <input type="date" class="form-control shadow-none">
      </div>
      <div class="border bg-light rounded p-3 ab-3">
        <h5 class="mb-3">Facilities</h5>
        <div class="mb-2">
             <input type="checkbox"id="f1" class="form-check-input shadow-none me-1">
              <label class="form-check-label" for="f1">Facility one</label>
        </div>
         <div class="mb-2">
             <input type="checkbox"id="f2" class="form-check-input shadow-none me-1">
              <label class="form-check-label" for="f2">Facility two</label>
        </div>
         <div class="mb-2">
             <input type="checkbox"id="f3" class="form-check-input shadow-none me-1">
              <label class="form-check-label" for="f3">Facility three</label>
        </div>
      </div>
      <div class="border bg-light rounded p-3 ab-3">
        <h5 class="mb-3">Guests</h5>
        <div class="d-flex">
          <div class="me-3">
           <label class="form-label" >Adults</label>
             <input type="number" class="form-control shadow-none mb-4">
        </div>
        <div>
           <label class="form-label">Children</label>
             <input type="number" class="form-control shadow-none mb-4">
        </div>
        </div>
        
      </div>

    </div>
  </div>
</nav>
    </div>
     <div class="col-lg-9 col-md-12 px-4">
     <div class="card mb-4 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/Rooms/room.jpg" class="img-fluid rounded-start" alt="...">
    </div>
     <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room</h5>
       <div class="features mb-4">
           <h5 class="mb-1">Features</h5>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               1. Room
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               1 Bathroom
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               2 Windows
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
         <div class="guests mb-3">
           <h5 class="mb-1">Guests</h5>
           <span class="badge rounded-pill bg-dark text-white text-wrap">
             2 Adults
           </span>
           <span class="badge rounded-pill bg-dark text-white text-wrap">
             1 Children
           </span>
         </div>
    </div>
    <div class="col-md-2 text-center">
       <h6 class="mb-4">5000Rs Per Night</h6>
           <a href="#" class="btn w-100  text-white custom-bg shadow-none mb-2">Book Now</a>
           <a href="#" class="btn w-100 btn-outline-dark  shadow-none">More Detail</a>
    </div>
  </div>
</div>
 <div class="card mb-4 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/Rooms/room1.png" class="img-fluid rounded-start" alt="...">
    </div>
     <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Special Room</h5>
       <div class="features mb-4">
           <h5 class="mb-1">Features</h5>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               2 BedRoom
           </span>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               2 BathRoom
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
         <div class="guests mb-3">
           <h5 class="mb-1">Guests</h5>
           <span class="badge rounded-pill bg-dark text-white text-wrap">
             2 Adults
           </span>
           <span class="badge rounded-pill bg-dark text-white text-wrap">
             4 Children
           </span>
         </div>
    </div>
    <div class="col-md-2 text-center">
       <h6 class="mb-4">7000Rs Per Night</h6>
           <a href="#" class="btn w-100  text-white custom-bg shadow-none mb-2">Book Now</a>
           <a href="#" class="btn w-100 btn-outline-dark  shadow-none">More Detail</a>
    </div>
  </div>
</div>
 <div class="card mb-4 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/Rooms/room3.png" class="img-fluid rounded-start" alt="...">
    </div>
     <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Luxary Room</h5>
       <div class="features mb-4">
           <h5 class="mb-1">Features</h5>
            <span class="badge rounded-pill bg-dark mb-3 text-wrap">
               1 Room
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
                Tv
           </span>
           <span class="badge rounded-pill bg-dark mb-3 text-wrap">
                Heater
           </span>
         </div>
         <div class="guests mb-3">
           <h5 class="mb-1">Guests</h5>
           <span class="badge rounded-pill bg-dark text-white text-wrap">
             2 Adults
           </span>
           <span class="badge rounded-pill bg-dark text-white text-wrap">
             2 Children
           </span>
         </div>
    </div>
    <div class="col-md-2 text-center">
       <h6 class="mb-4">10000Rs Per Night</h6>
           <a href="#" class="btn w-100  text-white custom-bg shadow-none mb-2">Book Now</a>
           <a href="#" class="btn w-100 btn-outline-dark  shadow-none">More Detail</a>
    </div>
  </div>
</div>
   </div>
    </div>
  

  </div>
</div>


<?php require('inc/footer.php'); ?>

</body>
</html>   