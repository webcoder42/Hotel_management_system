<?php
require('inc/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel Dashboard</title>
    <?php require('inc/links.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-light">

    <?php
    require('inc/header.php');
    ?>

    <!-- Setting -->
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 p-4 ms-auto">
    <h3 class="mb-4">Setting</h3>
                    <!-- Generals Setting -->

    <div class="card border-o shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Setting</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
    </div>
                    <!--General Setting  model-->

        <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Setting</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="site_title_inp">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp"
                                            class="form-control shadow-none">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="site_about_inp">About Us</label>
                                        <textarea name="site_about" id="site_about_inp"
                                            class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="resetInputValues()"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button"
                                        onclick="updateGeneral(site_title.value, site_about.value)"
                                        class="btn btn-dark  shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
        </div>

                                       <!--Shutdown-->
         <div class="card border-o shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown</h5>
                            <div class="form-check form-switch">
                                <form>
                             <input onchange="udp_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-troggle">
                            </form>
                          </div>
                        </div>
                       
                        <p class="card-text">
                            No customer allowed to book room until site has been  shutdown!
                        </p>
                    </div>
         </div>

                            <!--Contact Us Section-->
        <div class="card border-o shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Setting</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                 <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Gmail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                 <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-twitter me-1"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <div id="map-container" style="width: 100%; height: 400px;"></div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
        </div>                  


                 <!--Contact Detail Setting  model-->

        <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contactform" onsubmit="updateContacts(); return false;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contact Detail Setting</h5>
                                </div>
                                <div class="modal-body">
                                   <div class="container-fluid p-0">
                                       <div class="row">
                                           <div class="col-md-6">
                                             <div class="mb-3">
                                                <label class="form-label fw-bold">Address</label>
                                                <input type="text" name="address" id="address_inp"
                                                class="form-control shadow-none" required>
                                             </div>
                                              <div class="mb-3">
                                                <label class="form-label fw-bold">Google map</label>
                                                <input type="text" name="gmap" id="gmap_inp"
                                                class="form-control shadow-none" required>
                                             </div>
                                             <div class="mb-3">
                                                <label class="form-label fw-bold">Phone No</label>
                                               <div class="input-group mb-3">
                                                 <span class="input-group-text">  <i class="bi bi-telephone-fill"></i></span>
                                                 <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none" >
                                               </div>
                                             </div>
                                              <div class="mb-3">
                                              
                                               <div class="input-group mb-3">
                                                 <span class="input-group-text">  <i class="bi bi-telephone-fill"></i></span>
                                                 <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none" >
                                               </div>
                                             </div>
                                              <div class="mb-3">
                                                <label class="form-label fw-bold">Email</label>
                                                <input type="email" name="email" id="email_inp"
                                                class="form-control shadow-none" required>
                                             </div>
                                           </div>
                                           <div class="col-md-6">
                                                <div class="mb-3">
                                                <label class="form-label fw-bold">Social Link</label>
                                               <div class="input-group mb-3">
                                                 <span class="input-group-text">  <i class="bi bi-facebook"></i></span>
                                                 <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required >
                                               </div>
                                             </div>
                                              <div class="mb-3">
                                              
                                               <div class="input-group mb-3">
                                                 <span class="input-group-text"><i class="bi bi-instagram "></i></span>
                                                 <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" >
                                               </div>
                                               <div class="input-group mb-3">
                                                 <span class="input-group-text"><i class="bi bi-twitter "></i></span>
                                                 <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" >
                                               </div>
                                             </div>
                                             <div class="mb-3">
                                                <label class="form-label fw-bold">iframe</label>
                                                <input type="text" name="iframe" id="iframe_inp"
                                                class="form-control shadow-none" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6797.508231554054!2d74.483421!3d31.585790000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391911e3f4f76949%3A0x4851aba0418876ba!2sSky%20Land%20Water%20Park%20Man%20Made%20Lake!5e0!3m2!1sen!2sus!4v1707493988749!5m2!1sen!2sus"   required>
                                             </div>
                                           </div>
                                       </div>
                                   </div>


                                 
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="resetFormData()"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit"class="btn btn-dark  shadow-none" onclick="">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
        </div>

              
             <!-- Management Team Setting -->

           <div class="card border-o shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Management Team </h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#team-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>
                      <div class="row" id="team_data">

                      </div>
                    </div>
           </div>

           <!--Management Team  model-->

                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Team Members</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="site_title_inp">Name</label>
                                        <input type="text" name="member_name" id="member_name_inp"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="site_about_inp">Picture</label>
                                        <input type="file" name="member_picture" id="member_picture_inp" accept=".jpg, .png, .webp, .jpeg" 
                                            class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick=""
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button"
                                        onclick=""
                                        class="btn btn-dark  shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </d iv>




            </div>
        </div>
    </div>
    <?php require('inc/scripts.php'); ?>
    <script type="text/javascript">
        let general_data , contacts_data; 
        
        let team_s_form = document.getElementById('team_s_form');
        let member_name_inp = document.getElementById('member_name_inp');
        let member_picture_inp = document.getElementById('member_picture_inp');



  function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');
            let site_title_inp = document.getElementById('site_title_inp');
            let site_about_inp = document.getElementById('site_about_inp');
            let shutdown_troggle = document.getElementById('shutdown-troggle');
           

          

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 300) {
                    general_data = JSON.parse(xhr.responseText);
                    site_title.innerText = general_data.site_title;
                    site_about.innerText = general_data.site_about;
                    site_title_inp.value = general_data.site_title;
                    site_about_inp.value = general_data.site_about;

                } else {
                    console.error('Failed to fetch data');
                }
                if (general_data.shut_down == 0) {
                    shutdown_troggle.checked = false;
                    shutdown_troggle.value = 0;
                }else{
                     shutdown_troggle.checked = true;
                    shutdown_troggle.value = 1;
                }
              

            }

            xhr.send('action=get_general');
        }

    function updateGeneral(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        var myModal = document.getElementById('general-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 1) {
            alert('success','changes save!');
            get_general();
        }
        else{
            alert('error','no changes made!');
        }

        console.log(this.responseText);
        // You can handle the response as needed
    }

    xhr.send('site_title=' + encodeURIComponent(site_title_val) + '&site_about=' + encodeURIComponent(site_about_val) + '&updateGeneral=1');

}


        function resetInputValues() {
            let site_title_inp = document.getElementById('site_title_inp');
            let site_about_inp = document.getElementById('site_about_inp');

            // Assuming general_data is already defined and contains the necessary data
            if (site_title_inp && site_about_inp) {
                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;
            } else {
                console.error('Input elements not found');
            }   
      }
    function udp_shutdown(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (this.responseText == 1) {
            if (val) {
                alert('success', 'Shutdown mode on!');
            } else {
                alert('success', 'Shutdown mode off!');
            }
            get_general();
        } else {
            alert('error', 'Failed to update shutdown mode!');
        }

        console.log(this.responseText);
        // You can handle the response as needed
    }

    xhr.send('udp_shutdown=' + (val ? '0' : '1')); // Send '1' if val is true, '0' otherwise
}
 //Get contact Function //
function get_contacts() {
    let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
    let iframe = document.getElementById('iframe');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            if (xhr.responseText.trim() !== '') {
                try {
                    let responseData = JSON.parse(this.responseText);
                    if (responseData && typeof responseData === 'object') {
                        for (let i = 0; i < contacts_p_id.length; i++) {
                            document.getElementById(contacts_p_id[i]).innerText = responseData[contacts_p_id[i]] || '';
                        }
                        // Set iframe src here
                       let iframe = document.getElementById('gmap_inp');
                         if (iframe) {
                        iframe.src = responseData['gmap'] || '';
                         } else {
                           console.error('iframe element not found');
                          }

                        // Call contacts_inp function here
                        contacts_inp(responseData);
                    } else {
                        console.error("Invalid JSON response:", responseData);
                    }
                } catch (error) {
                    console.error("Error parsing JSON:", error);
                }
            } else {
                console.error("Empty response received.");
            }
        } else {
            console.error('Failed to fetch data. Status:', xhr.status);
        }
    };

    xhr.onerror = function () {
        console.error('Error occurred during the request.');
    };

    xhr.send('action=get_contacts');
}

function contacts_inp(data) {
    // Get the input elements by their IDs
    let address_inp = document.getElementById('address_inp');
    let gmap_inp = document.getElementById('gmap_inp');
    let pn1_inp = document.getElementById('pn1_inp');
    let pn2_inp = document.getElementById('pn2_inp');
    let email_inp = document.getElementById('email_inp');
    let fb_inp = document.getElementById('fb_inp');
    let insta_inp = document.getElementById('insta_inp');
    let tw_inp = document.getElementById('tw_inp');
    let iframe_inp = document.getElementById('iframe_inp');

    // Check if the input elements exist in the DOM
    if (address_inp && gmap_inp && pn1_inp && pn2_inp && email_inp && fb_inp && insta_inp && tw_inp && iframe_inp) {
        // Populate the input values with the corresponding data from the 'data' object
        address_inp.value = data['address'] || '';
        gmap_inp.value = data['gmap'] || '';
        pn1_inp.value = data['pn1'] || '';
        pn2_inp.value = data['pn2'] || '';
        email_inp.value = data['email'] || '';
        fb_inp.value = data['fb'] || '';
        insta_inp.value = data['insta'] || '';
        tw_inp.value = data['tw'] || '';
        iframe_inp.value = data['gmap'] || '';

    } else {
        console.error('One or more input elements not found in the DOM.');
    }
}



function initializeGoogleMap() {
    let googleMapDiv = document.getElementById('map-container');
    googleMapDiv.innerHTML = ''; // Clear any existing content inside the div
    let gmapUrl = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6797.508231554054!2d74.483421!3d31.585790000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391911e3f4f76949%3A0x4851aba0418876ba!2sSky%20Land%20Water%20Park%20Man%20Made%20Lake!5e0!3m2!1sen!2sus!4v1707493988749!5m2!1sen!2sus";
    googleMapDiv.innerHTML = `<iframe width="100%" frameborder="0" style="border:0;" src="${gmapUrl}" allowfullscreen loading="lazy"></iframe>`;
}

initializeGoogleMap();



function resetFormData() {
    
    if (contactform) {
        contactform.reset();
        get_contacts();
    } else {
        console.error('Contacts form not found');
    }
}

let contactform = document.getElementById('contactform');
contactform.addEventListener('submit', function(e) {
    e.preventDefault();
    updateContacts();
});


function updateContacts() {
    let formData = new FormData(contactform); // Use FormData to serialize form data

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        var myModal = document.getElementById('contacts-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 1) {
            alert('Contact information updated!');
            get_contacts(); // Refresh contact information after update
            resetFormData(); // Reset form fields after successful update
        } else {
            alert('Failed to update contact information!');
        }

        console.log(this.responseText);
        // You can handle the response as needed
    }

    xhr.send(formData); // Send form data directly
}




        window.onload = function () {
            get_general();
            get_contacts();
            resetFormData();
         //   get_members();//
        }
    </script>
    
</body>

</html>
