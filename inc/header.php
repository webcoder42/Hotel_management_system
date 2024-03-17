<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 pg-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">LGU Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-5" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5" href="Rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5" href="About.php">About</a>
        </li>


       
      </ul>
      
        
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
        </button>
         <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
              Register
        </button>
        
      </form>
    </div>
  </div>
</nav>    



  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> 
    
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        
      
      <div class="modal-header">
        <h5 class="modal-title" >
           <i class="bi bi-people"></i>  User Login
      </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control shadow-none">
  </div>
   <div class="mb-4">
      <label class="form-label">Password</label>
      <input type="Password" class="form-control shadow-none">
  </div>
  <div class="d-flex algin-items-center justify-content-between mb-2">
    <button type="submit"  class="btn-dark shadow-none">Login</button>
    <a href="javascript: void(0)">Forget Password</a>
  </div>
      </div>
      
      </form>
    </div>
  </div>
</div>
 
 <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> 
    
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        
      
      <div class="modal-header">
        <h5 class="modal-title" >
           <i class="bi bi-people-fill fs-3 me-2"></i>  User Registeration
      </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill bg-dark mb-3">
     Note: Please enter your valid data must match from your ID Card, Passport etc 
    </span>
     <div class="mb-3">
      <label class="form-label">picture</label>
      <input type="file" class="form-control shadow-none">
  </div>
        <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control shadow-none">
  </div>
       

         <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control shadow-none">
  </div>
   <div class="mb-4">
      <label class="form-label">Phone no</label>
      <input type="number" class="form-control shadow-none">
  </div>
   <div class="mb-4">
      <label class="form-label">Address</label>
      <input type="text" class="form-control shadow-none">
  </div>
   <div class="mb-4">
      <label class="form-label">Password</label>
      <input type="Password" class="form-control shadow-none">
  </div>
   <div class="mb-4">
      <label class="form-label">Confirm Password</label>
      <input type="Password" class="form-control shadow-none">
  </div>
  <div class="d-flex algin-items-center justify-content-between mb-2">
    <button type="submit"  class="btn-dark shadow-none">Register

  </div>
  
      </div>
      
      </form>
    </div>
  </div>
</div>