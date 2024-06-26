<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['login'])) {
  if ($_GET['login'] == 'false') {
      echo "
      <div class=' p-3 position-fixed'  style='z-index: 11; bottom: 5%; right: 5%; '>
      <div id='liveToast' class='toast show hide' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
        <i class='fa-solid fa-xmark me-12 text-white p-8 rounded-5 bg-danger'></i>
          <strong class='me-auto'>Failed to Login</strong>
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
            Apologies, but we couldn't find any user with those credentials.
        </div>
      </div>
    </div>
      ";

  } 

  if ($_GET['login'] == 'approval-pending') {
    echo "
    <div class=' p-3 position-fixed'  style='z-index: 11; bottom: 5%; right: 5%; '>
    <div id='liveToast' class='toast show hide' role='alert' aria-live='assertive' aria-atomic='true'>
      <div class='toast-header '>
      <i class='fa-solid fa-hourglass-start me-12 text-white p-8 rounded-5 bg-warning'></i>
        <strong class='me-auto'>Failed to Login</strong>
        <small>Just Now</small>
        <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
      </div>
      <div class='toast-body'>
          Apologies, but your registration is yet to be approved by the administrator. Please check again after some time.
      </div>
    </div>
  </div>
    ";

} 

if ($_GET['login'] == 'approval-rejected') {
  echo "
  <div class=' p-3 position-fixed'  style='z-index: 11; bottom: 5%; right: 5%; '>
  <div id='liveToast' class='toast show hide' role='alert' aria-live='assertive' aria-atomic='true'>
    <div class='toast-header '>
    <i class='fa-solid fa-xmark me-12 text-white p-8 rounded-5 bg-danger'></i>
      <strong class='me-auto'>Failed to Login</strong>
      <small>Just Now</small>
      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
    </div>
    <div class='toast-body'>
        Apologies, but your registration request was rejected. Please go through your form and resubmit with proper data.
    </div>
  </div>
</div>
  ";

} 

}

if (isset($_GET['signup'])) {
  if ($_GET['signup'] == 'true') {
      echo "
      <div class=' p-3 position-fixed'  style='z-index: 11; bottom: 5%; right: 5%; '>
      <div id='liveToast' class='toast show hide' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
        <i class='fa-solid fa-check me-12 text-white p-8 rounded-5 bg-success'></i>
          <strong class='me-auto'>Client Registration</strong>
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
            Successfully sent the Registration request to the Administrator.
        </div>
      </div>
    </div>
      ";

  } elseif( ($_GET['signup'] == 'duplicate')){
    echo "
    <div class=' p-3 position-fixed'  style='z-index: 11; bottom: 5%; right: 5%; '>
      <div id='liveToast' class='toast show hide' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
        <i class='fa-solid fa-xmark me-12 text-white p-8 rounded-5 bg-danger'></i>
          <strong class='me-auto'>Client Registration</strong>
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
            Email already exists. Please try with another!
        </div>
      </div>
    </div>
    ";
  } elseif(($_GET['signup'] == 'unmatched')){
    echo "
    <div class=' p-3 position-fixed'  style='z-index: 11; bottom: 5%; right: 5%; '>
      <div id='liveToast' class='toast show hide' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
        <i class='fa-solid fa-xmark me-12 text-white p-8 rounded-5 bg-danger'></i>
          <strong class='me-auto'>Client Registration</strong>
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
            Unmatched Passwords : The passwords do not match.
        </div>
      </div>
    </div>
    
    ";
  }else
   {
      echo "
      <div class=' p-3 position-fixed'  style='z-index: 11; bottom: 5%; right: 5%; '>
      <div id='liveToast' class='toast show hide' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
        <i class='fa-solid fa-xmark me-12 text-white p-8 rounded-5 bg-danger'></i>
          <strong class='me-auto'>Client Registration</strong>
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
            Apologies, but we couldn't process the registration due to some error.
        </div>
      </div>
    </div>
      ";
          }
}

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hamrostel</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <!-- Login : Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-0">
        <div class="modal-header border-0 d-flex justify-content-end">
          <button type="button" class="btn p-0 text-primary font-24" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
        <div class="modal-body p-0">
          <div class="login_content--box pt-48 pb-80 px-80 pb-48 bg-white">
            <div class="login_content--header mb-48">
              <h2 class="text-beta text-primary fw-semibold text-center mb-14">
                Login
              </h2>
              <p class="font-16 text-gray-600 text-center">
                Sign into your account through your details.
              </p>
            </div>
            <!-- Login form -->
            <form id="login-form" class="d-flex login_content--form flex-column gap-18" action="./login.php"
              method="POST">
              <div class="login_content--input">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" required name="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" />
                <div id="emailHelp" class="form-text">
                  <p class="text-gray-500 m-0">
                    We'll never share your email with anyone else.
                  </p>
                </div>
              </div>
              <div class="login_content--input">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" required class="form-control" id="exampleInputPassword1" />
              </div>
              <div class="login_content--input mb-24">
                <label for="form-select" class="mb-8">Select User</label>
                <select class="form-select text-secondary" id="fomr-select" name="user_type"
                  aria-label="Default select example">
                  <option selected>Student</option>
                  <option value="1">Admin</option>
                </select>
              </div>
              <div class="login_content--footer">
                <div class="login_content-btnBox mb-16">
                  <button type="submit" class="btn-1 w-100">Sign in</button>
                </div>
                <p class="font-16 text-gray-600 text-center">
                  Don't have an account?
                  <a data-bs-dismiss="modal" type="button" class="text-primary create-account fw-medium td-none">Create
                    Account</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Signup : Modal -->
  <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-signup modal-dialog-centered">
      <div class="modal-content rounded-0">
        <div class="modal-header border-0 d-flex justify-content-end">
          <button type="button" class="btn p-0 text-primary font-24" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
        <div class="modal-body p-0">
          <div class="login_content--box pt-48 pb-80 px-80 pb-48 bg-white">
            <div class="login_content--header mb-48">
              <h2 class="text-beta text-primary fw-semibold text-center mb-14">
                Sign Up
              </h2>
              <p class="font-16 text-gray-600 text-center">
                Register your account to <strong>become a Hosteler!</strong>
              </p>
            </div>
            <form id="signup-form" class="d-flex login_content--form gap-48 flex-column" action="./signup.php"
              method="POST">
              <div class="d-flex gap-24 flex-column login_content--form-personal">
                <div class="login_content--input">
                  <label for="validationDefault01" class="form-label">Name</label>
                  <input type="text" class="form-control" id="validationDefault01" name="name" required />
                </div>
                <div class="login_content--input">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" required class="form-control" id="exampleInputEmail1" name="email"
                    aria-describedby="emailHelp" />
                  <div id="emailHelp" class="form-text">
                    <p class="text-gray-500 m-0">
                      We'll never share your email with anyone else.
                    </p>
                  </div>
                </div>
                <div class="login_content--input">
                  <label for="form-select-gender" class="mb-8">Gender</label>
                  <select class="form-select " id="form-select-fc" name="gender" aria-label="Default select example">
                    <option selected value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="login_content--input">
                  <label for="course" class="form-label">Course</label>
                  <input type="text" required class="form-control" id="course" name="course" />
                </div>
                <div class="login_content--input">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" required class="form-control" id="exampleInputPassword1" name="password" />
                </div>
                <div class="login_content--input">
                  <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                  <input type="password" required class="form-control" id="exampleInputPassword2"
                    name="confirm_password" />
                </div>
                <div class="login_content--input">
                  <label for="phoneNumber" class="form-label">Phone Number</label>
                  <input pattern="9\d{9}" type="text" required class="form-control" id="phoneNumber" name="phoneNumber"
                    title="Please enter a 10-digit number starting with 9" />
                </div>
                <div class="login_content--input">
                  <label for="form-select-fc" class="mb-8">Select Food Category</label>
                  <select class="form-select " id="form-select-fc" name="foodCategory"
                    aria-label="Default select example">
                    <option selected value="Non - Veg">Non - Veg</option>
                    <option value="Veg">Vegetarian</option>
                  </select>
                </div>
                <div class="login_content--input">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <input type="date" required class="form-control" max="<?php echo date('Y-m-d'); ?>" id="dob"
                    name="dob" title="Please fill your date of birth." />
                </div>

              </div>
              <div class="login_content--form-guardian">
                <h3 class="text-gamma mb-32 text-black">
                  Guardian Information
                </h3>
                <div class="d-flex gap-18 flex-column login_content--form-guardian">
                  <div class="login_content--input">
                    <label for="validationDefault03" class="form-label">Guardian Name</label>
                    <input type="text" class="form-control" id="validationDefault03" name="guardianName" required />
                  </div>
                  <div class="login_content--input">
                    <label for="phoneNumber1" class="form-label">Guardian Phone Number</label>
                    <input pattern="9\d{9}" type="text" required class="form-control" id="phoneNumber1"
                      name="guardianPhoneNumber" title="Please enter a 10-digit number starting with 9" />
                  </div>
                  <div class="login_content--input">
                    <label for="passport" class="form-label">Guardian Citizen Number</label>
                    <input type="number" required class="form-control" id="passport" name="guardianPassport"
                      title="Please enter a 10-digit number starting with 9" />
                  </div>
                  <div class="login_content--input">
                    <label for="form-select-1" class="mb-8">Guardian Type </label>
                    <select class="form-select text-secondary" id="form-select-1" name="userType"
                      aria-label="Default select example">
                      <option selected value="Parent">Parent</option>
                      <option value="Sibling">Sibling</option>
                      <option value="Relative">Relative</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="login_content--footer">
                <div class="login_content-btnBox mb-16">
                  <button type="submit" class="btn-1 w-100">Sign Up</button>
                </div>
                <p class="font-16 text-gray-600 text-center">
                  Already have an account?
                  <a data-bs-dismiss="modal" type="button" class="text-primary login-account fw-medium td-none">Login
                    Here</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-----=====-----===== SECTION : HEADER =====-----=====----->
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary pb-24 pt-24">
      <div class="container">
        <a class="text-white navbar-brand fw-semibold" href="#section-hero">
          <i class="fa-solid font-18 fa-house-user bg-primary-tint text-primary p-8 rounded-5 me-8"></i>
          Hamrostel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav gap-32 align-items-center fw-medium fs-24">
            <a class="nav-link text-white fw-semibold" aria-current="page" href="#hero">Home</a>
            <a class="nav-link text-white fw-semibold" href="#facilities">Facilities</a>
            <a class="nav-link text-white fw-semibold" href="#rooms">Rooms</a>
            <a class="nav-link text-white fw-semibold" href="#events">Events</a>
            <a class="nav-link text-white fw-semibold" href="#contactus">Contact Us</a>
            <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
              class="nav-link btn-2-link">Login</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-----=====-----===== SECTION : HERO =====-----=====----->
    <section id="hero" class="section hero py-96">
      <div class="container">
        <div class="row align-items-center gx-48">
          <div class="col-sm-12 col-md-6">
            <div class="hero_content--texts mb-48">
              <h1 class="text-alpha fw-semibold mb-24 text-black">
                <span class="text-primary">H</span>amro<span class="text-secondary">,</span>
                <span class="text-primary">R</span>amro<span class="text-secondary">,</span>
                <span class="text-primary">H</span>ostel<span class="text-secondary">.</span>
              </h1>
              <p class="text-gray-600 font-18 lh-para">
                Welcome to Hamro Ramro Hostel. Experience comfort and
                affordability in our vibrant hostel. Your perfect stay awaits.
              </p>
            </div>
            <div class="hero_content--btn d-flex gap-32 pe-12">
              <button id="reserve-appointment" class="btn-1 reserve-appointment-btn">
                Reserve Appointment<i class="ms-12 fa-solid fa-calendar-check"></i>
              </button>
              <button class="btn-2" id="get-started">
                Get Started<i class="ms-12 fa-solid fa-chevron-down"></i>
              </button>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="hero_content--imgBx">
              <img class="rounded hero_content--img img-fluid" src="./image/hostel-hero.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-----=====-----===== SECTION : FACILITIES =====-----=====----->
    <section id="facilities" class="section facilities section-facilities py-96">
      <div class="container">
        <div class="row align-items-center g-48">
          <div class="col-md-12 col-lg-6">
            <div class="facilities_content--header mb-32">
              <span class="text-primary d-block font-14 fw-semibold mb-8">VIEW FACILITIES</span>
              <h2 class="text-beta">Our Facilities</h2>
            </div>
            <div class="facilities_content--para">
              <p class="lh-para font-16 text-gray-600">
                Experience convenience and comfort with our diverse facilities
                tailored for you. From cozy lounges to refreshing amenities,
                enjoy a relaxing stay at our hostel.
              </p>
            </div>
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="row gy-24">
              <div class="col-12 col-lg-6 col-md-6 facilities_content--box">
                <div class="p-32 rounded-4 facilities_content--details bg-white">
                  <div class="icon-bx bg-secondary-tint d-inline-block mb-20 p-8 rounded-4">
                    <i class="text-secondary fa-solid fa-burger font-24"></i>
                  </div>
                  <h3 class="fw-semibold text-secondary mb-24 text-gamma">
                    Quality Food
                  </h3>
                  <p class="text-gray-600 lh-para">
                    Savor <b>fresh & locally-sourced </b> meals from breakfast
                    to dinner at our place.
                  </p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 facilities_content--box">
                <div class="p-32 rounded-4 facilities_content--details bg-white">
                  <div class="icon-bx bg-secondary-tint d-inline-block mb-20 p-8 rounded-4">
                    <i class="text-secondary fa-solid fa-shield-halved font-24"></i>
                  </div>
                  <h3 class="fw-semibold text-secondary mb-24 text-gamma">
                    Safety & Security
                  </h3>
                  <p class="text-gray-600 lh-para">
                    At our hostel, your <b>safety comes first</b>. Relax and
                    enjoy your stay with peace of mind.
                  </p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 facilities_content--box">
                <div class="p-32 rounded-4 facilities_content--details bg-white">
                  <div class="icon-bx bg-secondary-tint d-inline-block mb-20 p-8 rounded-4">
                    <i class="text-secondary fa-solid fa-wifi font-24"></i>
                  </div>
                  <h3 class="fw-semibold text-secondary mb-24 text-gamma">
                    Wi-Fi Access
                  </h3>
                  <p class="text-gray-600 lh-para">
                    Enjoy <b>seamless connectivity</b> with complimentary
                    Wi-Fi throughout our premises.
                  </p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 facilities_content--box">
                <div class="p-32 rounded-4 facilities_content--details bg-white">
                  <div class="icon-bx bg-secondary-tint d-inline-block mb-20 p-8 rounded-4">
                    <i class="text-secondary fa-solid fa-face-smile font-24"></i>
                  </div>
                  <h3 class="fw-semibold text-secondary mb-24 text-gamma">
                    Events & Activities
                  </h3>
                  <p class="text-gray-600 lh-para">
                    Immerse yourself in our vibrant community with a diverse
                    array of <b>social events and activities.</b>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-----=====-----===== SECTION : ROOMS =====-----=====----->
    <section id="rooms" class="section rooms py-96">
      <div class="container">
        <div class="row align-items-center gy-48">
          <div class="col-md-12 col-lg-6">
            <div class="rooms_content--header mb-32">
              <span class="text-primary font-14 d-block fw-semibold">VIEW ROOMS</span>
              <h2 class="text-beta">Our Rooms</h2>
            </div>
            <div class="roooms_content--para">
              <p class="lh-para font-16 text-gray-600">
                Discover comfort and relaxation in our thoughtfully designed
                rooms, tailored to meet your needs.
              </p>
            </div>
            <div class="rooms_content--btn d-flex gap-24">
              <button class="btn-3 font-20 mt-32" id="know-more">
                View More
              </button>
              <a href="gallery.php" class="btn-3 btn font-20 mt-32" id="know-more">
                Gallery
              </a>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 rooms_content--box">
            <div class="row g-24 gy-48">
              <div class="col-12 col-md-6">
                <div class="rounded-4 rooms_content--details">
                  <div class="rooms_content--imgBx">
                    <img src="./image/dorms.jpeg" class="rooms_content--img" alt="" />
                  </div>
                  <div class="rooms_content--texts p-24">
                    <div class="rooms_content--header mb-24">
                      <span
                        class="mb-8 rounded-5 d-inline-block font-12 bg-primary-tint--1 rounded-5 text-primary-hover py-4 px-8 fw-medium">Frequently
                        Used</span>
                      <h3 class="text-gamma text-gray-700 m-0">Dorms</h3>
                    </div>
                    <div class="rooms_content--features">
                      <div class="rooms_content--features-details d-flex align-items-center gap-18 mb-12">
                        <div class="rooms_content--features-icon">
                          <ion-icon class="text-secondary font-24" name="bed"></ion-icon>
                        </div>
                        <p class="text-gray-700 m-0 font-18"><b>4</b> Beds</p>
                      </div>
                      <div class="rooms_content--features-details d-flex align-items-center gap-18 mb-12">
                        <div class="rooms_content--features-icon">
                          <ion-icon class="text-secondary font-24" name="male-female"></ion-icon>
                        </div>
                        <p class="text-gray-700 m-0"><b>1</b> Toilet</p>
                      </div>
                      <div class="rooms_content--features-details d-flex align-items-center gap-18 mb-12">
                        <div class="rooms_content--features-icon">
                          <ion-icon class="text-secondary font-24" name="snow"></ion-icon>
                        </div>
                        <p class="text-gray-700 m-0">Air Conditioning</p>
                      </div>
                      <div class="rooms_content--features-details d-flex align-items-center gap-18">
                        <div class="rooms_content--features-icon">
                          <ion-icon class="text-secondary font-24" name="wifi"></ion-icon>
                        </div>
                        <p class="text-gray-700 m-0">Wi-Fi</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="rounded-4 rooms_content--details">
                  <div class="rooms_content--imgBx">
                    <img src="./image/private.jpg" class="rooms_content--img" alt="" />
                  </div>
                  <div class="rooms_content--texts p-24">
                    <div class="rooms_content--header mb-24">
                      <span
                        class="mb-8 rounded-5 d-inline-block font-12 bg-primary-tint--1 rounded-5 text-primary-hover py-4 px-8 fw-medium">Popular</span>
                      <h3 class="text-gamma text-gray-700 m-0">Individual</h3>
                    </div>
                    <div class="rooms_content--features">
                      <div class="rooms_content--features-details d-flex align-items-center gap-18 mb-12">
                        <div class="rooms_content--features-icon">
                          <ion-icon class="text-secondary font-24" name="bed"></ion-icon>
                        </div>
                        <p class="text-gray-700 m-0 font-18">
                          <b>Self</b> Bed
                        </p>
                      </div>
                      <div class="rooms_content--features-details d-flex align-items-center gap-18 mb-12">
                        <div class="rooms_content--features-icon">
                          <ion-icon class="text-secondary font-24" name="male-female"></ion-icon>
                        </div>
                        <p class="text-gray-700 m-0"><b>1</b> Toilet</p>
                      </div>
                      <div class="rooms_content--features-details d-flex align-items-center gap-18 mb-12">
                        <div class="rooms_content--features-icon">
                          <ion-icon class="text-secondary font-24" name="snow"></ion-icon>
                        </div>
                        <p class="text-gray-700 m-0">Air Conditioning</p>
                      </div>
                      <div class="rooms_content--features-details d-flex align-items-center gap-18">
                        <div class="rooms_content--features-icon">
                          <ion-icon class="text-secondary font-24" name="wifi"></ion-icon>
                        </div>
                        <p class="text-gray-700 m-0"><b>5G</b> Wi-Fi</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-----=====-----===== SECTION : EVENTS =====-----=====----->
    <section id="events" class="section events py-96">
      <div class="container">
        <div class="row align-items-center gy-48">
          <div class="col-md-12 col-lg-6">
            <div class="events_content--header mb-32">
              <span class="d-block text-primary font-14 fw-semibold">VIEW EVENTS</span>
              <h2 class="text-beta">Our Events</h2>
            </div>
            <div class="events_content--para">
              <p class="lh-para font-16 text-gray-600">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Consequatur laborum dolorum quaerat sint iusto eaque.
              </p>
            </div>
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="row g-24">
              <div class="col-12 col-lg-6 col-md-6 events_content--box">
                <div class="events_content--imgBx rounded-4">
                  <img src="./image/HappyHoli.jpg" alt="" class="events_content--img" />

                  <div class="events_content--texts p-24">
                    <h3 class="text-gamma text-primary mb-12">Holi 2080</h3>
                    <p class="text-gray-300">
                      Celebrated splashing vibrant colors all around and
                      feasting on a party.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 events_content--box">
                <div class="events_content--imgBx rounded-4">
                  <img src="./image/shivratri.jpg" alt="" class="events_content--img" />

                  <div class="events_content--texts p-24">
                    <h3 class="text-gamma text-primary mb-12">Shivaratri</h3>
                    <p class="text-gray-300">
                      Celebrated the occasion by organising a get-together,
                      devouring tasty meals.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 events_content--box">
                <div class="events_content--imgBx rounded-4">
                  <img src="./image/krishnajanmasthami.jpg" alt="" class="events_content--img" />

                  <div class="events_content--texts p-24">
                    <h3 class="text-gamma text-primary mb-12">
                      Krishna Janmashtami
                    </h3>
                    <p class="text-gray-300">
                      Celebrated by singing, praying together, preparing and
                      sharing special food.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 events_content--box">
                <div class="events_content--imgBx rounded-4">
                  <img src="./image/HappyTihar.jpg" alt="" class="events_content--img" />

                  <div class="events_content--texts p-24">
                    <h3 class="text-gamma text-primary mb-12">Tihar 2080</h3>
                    <p class="text-gray-300">
                      Celebrated dancing, singing and eating delicious foods.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-----=====-----===== SECTION : TESTIMONIALS =====-----=====----->
    <section id="testimonials" class="section testimonials py-96">
      <div class="container">
        <div class="row align-items-center gy-48 gx-32">
          <div class="col-md-6 testimonials_content--texts col-sm-12">
            <div class="testimonials_content--header mb-32">
              <span class="d-block text-primary font-14 fw-semibold">VIEW TESTIMONIALS</span>
              <h2 class="text-beta">Our Testimonials</h2>
            </div>
            <div class="testimonials_content--para">
              <p class="lh-para font-16 text-gray-600">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Consequatur laborum dolorum quaerat sint iusto eaque.
              </p>
            </div>
          </div>
          <div class="col-md-6 testimonials_content--box col-sm-12">
            <div class="swiper mySwiper rounded-4">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper-container p-48">
                    <p class="text-gray-600 mb-48 font-16 testimonials_content--testimonial-para">
                      Lorem ipsum dolor amet consectur elit adicing elit sed
                      mod tempor incid idunt enim minim veniam quis nosrud
                      citation laboris nisiste aliquip comodo perspiatix unde
                      omnis iste natus error sit voluptatem. accusantium
                      doloreq laudantum.
                    </p>

                    <div class="testimonials_content--personal-details">
                      <div class="testimonials_content--imgBox mb-12">
                        <img class="testimonials_content--img" src="./image/wm1.jpg" alt="" />
                      </div>
                      <span class="d-block font-18 fw-semibold text-black">Haley Bennet</span>
                      <span class="d-block text-secondary font-14 fw-semibold">Student</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-container p-48">
                    <p class="text-gray-600 mb-48 font-16 testimonials_content--testimonial-para">
                      Lorem ipsum dolor amet consectur elit adicing elit sed
                      mod tempor incid idunt enim minim veniam quis nosrud
                      citation laboris nisiste aliquip comodo perspiatix unde
                      omnis iste natus error sit voluptatem. accusantium
                      doloreq laudantum.
                    </p>

                    <div class="testimonials_content--personal-details">
                      <div class="testimonials_content--imgBox mb-12">
                        <img class="testimonials_content--img" src="./image/m1.jpg" alt="" />
                      </div>
                      <span class="d-block font-18 fw-semibold text-black">Yogesh Bikram Shah</span>
                      <span class="d-block text-secondary font-14 fw-semibold">Student</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-----=====-----===== SECTION : MESSAGE =====-----=====----->
    <section id="message" class="section message py-96">
      <div class="container">
        <div class="row align-items-center gy-48 gx-32">
          <div class="col-md-12 col-lg-6 col-sm-12 message_content--texts">
            <div class="message_content--header mb-32">
              <span class="d-block text-primary font-14 fw-semibold">CONTACT</span>
              <h2 class="text-beta">Message Us</h2>
            </div>
            <div class="message_content--para">
              <p class="lh-para font-16 text-gray-600">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Consequatur laborum dolorum quaerat sint iusto eaque.
              </p>
            </div>
          </div>

          <div class="col-md-12 col-lg-6 col-sm-12 message_content--box col-sm-12">
            <div class="bg-white message_content--formBox p-32 rounded-4">
              <form class="d-flex message_content--form flex-column gap-32" action="https://formspree.io/f/xqkrgkej"
                method="POST">
                <div class="d-flex gap-18 message_content--input">
                  <div class="message_content--inpu w-100">
                    <label for="name" class="form-label">Name</label>
                    <input name="username" type="text" class="form-control" id="name" required />
                  </div>
                  <div class="message_content--input w-100">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" name="subject" required class="form-control" id="subject" />
                  </div>
                </div>
                <div class="d-flex gap-18 message_content--input">
                  <div class="message_content--input w-100">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" required class="form-control" id="exampleInputEmail1"
                      aria-describedby="emailHelp" />
                  </div>
                  <div class="message_content--input w-100">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input pattern="9\d{9}" type="text" required class="form-control" id="phoneNumber"
                      name="phoneNumber" title="Please enter a 10-digit number starting with 9" />
                  </div>
                </div>
                <div class="message_content--input">
                  <label for="msg" class="form-label">Message: </label>
                  <textarea id="msg" name="textarea" cols="30" rows="5" placeholder="Enter your message"
                    autocomplete="off" class="form-control"></textarea>
                </div>
                <button type="submit" href="#" class="btn-4-link send-msg d-block w-100">
                  Send Message
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION : CONTACT US -->
    <section id="contactus" class="section contactus py-96">
      <div class="container">
        <div class="contact_content--box bg-primary-tint--1 rounded-4 p-56">
          <p class="font-24 fw-semibold text-black text-center mb-48">
            Are you ready to take the next step toward your future career?
          </p>
          <div class="contact_content--btnBx d-flex gap-24">
            <button id="contact-us-btn" class="btn-2 py-18">
              <i class="fa-solid fa-phone me-24"></i>Contact Us
            </button>
            <button onclick="showModal2()" class="btn-1 login-account py-18">
              <i class="fa-regular fa-calendar-check me-24"></i>Apply Now
            </button>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer id="footer" class="section footer py-96">
    <div class="container">
      <div class="row gy-48 gx-32">
        <div class="col-md-4 footer_content--texts order-0 col-sm-12">
          <div class="footer_content--texts-header mb-32">
            <a class="font-24 text-primary navbar-brand fw-semibold mb-18" href="#header"><i
                class="fa-solid fa-house-user"></i> Hamrostel</a>
            <p class="font-16 text-black mt-12">
              An experience, you won't regret.
            </p>
          </div>
          <div class="footer_content--texts-mediasBox mb-48">
            <p class="fw-medium text-gray-600">Social Medias:</p>
            <div class="footer_content--texts-medias d-flex gap-18">
              <a class="text-primary-shade--1" href="#"><i class="font-24 fa-brands fa-facebook"></i></a>
              <a class="text-primary-shade--1" href="#"><i class="font-24 fa-brands fa-instagram"></i></a>
              <a class="text-primary-shade--1" href="#"><i class="font-24 fa-brands fa-twitter"></i></a>
            </div>
          </div>
          <p class="font-12 fw-normal text-gray-500">
            Copyright © <span class="year">2024</span> by Omnifood, Inc. All
            rights reserved.
          </p>
        </div>
        <div class="col-md-4 footer_content--texts order-1 col-sm-6">
          <div class="footer_content--texts-header mb-24">
            <h4 class="font-18 fw-semibold text-black">Quick Links</h4>
          </div>
          <ul class="d-flex flex-column gap-18 p-0">
            <li class="ls-none">
              <a class="td-none footer_content--texts-link font-16 fw-medium text-gray-600" href="#hero">Home</a>
            </li>
            <li class="font-16 ls-none fw-medium text-gray-600">
              <a class="td-none footer_content--texts-link font-16 fw-medium text-gray-600"
                href="#facilities">Facilities</a>
            </li>
            <li class="ls-none">
              <a class="td-none footer_content--texts-link font-16 fw-medium text-gray-600" href="#rooms">Rooms</a>
            </li>
            <li class="ls-none">
              <a class="td-none footer_content--texts-link font-16 fw-medium text-gray-600" href="#events">Events</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 footer_content--texts order-2 col-sm-6">
          <div class="footer_content--texts-header mb-24">
            <h4 class="font-18 fw-semibold text-black">About Us</h4>
          </div>
          <ul class="d-flex flex-column gap-18 p-0">
            <li class="ls-none">
              <a class="td-none footer_content--texts-link footer-num font-16 fw-medium text-gray-600"
                href="tel:9842742225"><i class="fa-solid fa-phone me-12"></i>+977 9842742225</a>
            </li>
            <li class="font-16 ls-none fw-medium text-gray-600">
              <a class="td-none footer_content--texts-link footer-mail font-16 fw-medium text-gray-600"
                href="mailto:kebab.bahadur@gmail.com"><i class="fa-solid fa-envelope me-12"></i>info@hamrostel.com.np
              </a>
            </li>
            <li class="font-16 ls-none fw-medium text-gray-600">
              <a target="_blank" class="td-none footer_content--texts-link font-16 fw-medium text-gray-600"
                href="https://www.google.com/maps/place/Herald+College+Kathmandu/@27.712094,85.3281912,17z/data=!3m1!4b1!4m6!3m5!1s0x39eb196de5da5741:0x652792640c70ede9!8m2!3d27.712094!4d85.3307661!16s%2Fg%2F1pyqqt1lz?entry=ttu"><i
                  class="fa-solid fa-location-dot me-12"></i>Naxal,
                Kathmandu, Nepal
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-----=====-----===== Scripts =====-----=====----->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./js/swiper.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/4cbeaa27da.js" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

  <script src="./js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>