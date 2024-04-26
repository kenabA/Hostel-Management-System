<?php 

if (isset($_GET['add'])) {

  if ($_GET['add'] == 'success') {
      echo "
      <div class=' p-3 position-absolute'  style='z-index: 11; bottom: 5%; right: 5%;'>
      <div id='liveToast' class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
          
        <i class='fa-solid fa-check me-12 text-white p-8 rounded-5 bg-success'></i>
          <strong class='me-auto'>Add Client</strong>
        
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
          Sucessfully added new client!
        </div>
      </div>
    </div>
      ";

  } 
  
  if ($_GET['add'] == 'error') {
      echo  "
      <div class=' p-3 position-absolute'  style='z-index: 11; bottom: 5%; right: 5%;'>
      <div id='liveToast' class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
          
        <i class='fa-solid fa-xmark me-12 text-white p-8 rounded-5 bg-danger'></i>
          <strong class='me-auto'>Add Client</strong>
        
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
          Failed to add new client!
        </div>
      </div>
    </div>
      ";
  }

  if( ($_GET['add'] == 'duplicate')){
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
  } 
  
  if(($_GET['add'] == 'unmatched')){
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
  }
  
}

if (isset($_GET['edit'])) {

  if ($_GET['edit'] == 'success') {
      echo "
      <div class=' p-3 position-absolute'  style='z-index: 11; bottom: 5%; right: 5%;'>
      <div id='liveToast' class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
          
        <i class='fa-solid fa-check me-12 text-white p-8 rounded-5 bg-success'></i>
          <strong class='me-auto'>Edit Client</strong>
        
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
          Change saved successfully!
        </div>
      </div>
    </div>
      ";

  }   

  if ($_GET['edit'] == 'error') {
      echo  "
      <div class=' p-3 position-absolute'  style='z-index: 11; bottom: 5%; right: 5%;'>
      <div id='liveToast' class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
          
        <i class='fa-solid fa-xmark me-12 text-white p-8 rounded-5 bg-danger'></i>
          <strong class='me-auto'>Edit Client</strong>
        
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
          Unable to make changes!
        </div>
      </div>
    </div>
      ";
  }

}

if (isset($_GET['delete'])) {
  
  if ($_GET['delete'] == 'success') {
      echo "
      <div class=' p-3 position-absolute'  style='z-index: 11; bottom: 5%; right: 5%;'>
      <div id='liveToast' class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header '>
          
        <i class='fa-solid fa-check me-12 text-white p-8 rounded-5 bg-success'></i>
          <strong class='me-auto'>Delete Client</strong>
        
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body'>
          Client deleted Successfully!
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
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
  .dropdown-item:active {
    background-color: unset !important;
    color: unset !important;
  }

  .nav-link {

    &.active,
    &.show {
      color: #e09200 !important;
    }
  }
  </style>
</head>

<body>


  <!-----=====-----===== SIDENAV =====-----=====----->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header p-32 border-bottom-5 border">
      <h3 class="font-24 m-0 fw-semibold">Hamrostel</h3>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-32">
      <ul class="offcanvas-navigation-lists ls-none d-flex flex-column gap-32 p-0">
        <li class="offcanvas-navigation-list font-18">
          <a href="./admin-dashboard.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-chart-simple"></i>
            Dashboard</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./client.php" class="td-none text-gray-500 active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-user"></i>
            Hostelers</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./guardian-detail.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-hands-holding-child"></i>
            Guardian Details</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./admin.html" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-bed"></i>
            Rooms</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./admin.html" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-gear"></i>
            Settings</a>
        </li>
      </ul>
    </div>
  </div>

  <!-----=====-----===== SECTION : HEADER =====-----=====----->
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary pb-24 pt-24">
      <div class="container justify-content-between">
        <div class="d-flex justify-content-center gap-18 align-items-center">
          <button class="btn text-primary-tint" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars font-20"></i>
          </button>
          <h3 class="text-gamma fw-semibold m-0 text-primary-tint">Admin</h3>
        </div>



        <div id="navbarNavAltMarkup" class="d-flex gap-24 align-items-center">
          <div class="header-time d-flex gap-12 align-items-center">
            <i class="fa-regular text-primary-tint p-8 bg-primary-tint--1 text-primary rounded-5 fa-calendar"></i>
            <?php 
          $date = date("jS F, Y");
          echo "<p class='fw-semibold m-0 text-primary-tint font-18'>$date</p>"
        ?>

          </div>
          <div class="navbar-nav fw-medium">

            <?php

              session_start();
              include '../../db_connection.php';

              error_reporting(E_ALL);
              ini_set('display_errors', 1);

              $id = mysqli_real_escape_string($conn, $_SESSION['id']);
              $sql = "SELECT * FROM admin WHERE id='$id'";
              $query = mysqli_query($conn, $sql);

              if($query) {
                
                while($result = mysqli_fetch_assoc($query)) {
                    $name = $result['name']; 
                }
                
                echo "
                <div class='dropdown'>
  
  <a type='button' data-bs-toggle='dropdown' aria-expanded='false' class='nav-link dropdown-toggle btn-5 px-24 rounded-3'>Hi, $name</a>

  <ul class='dropdown-menu rounded-3'>
    <li class='d-flex gap-8 align-items-center justify-content-center'><i class='fa-solid text-primary fa-power-off'></i> <a class='logout-link text-gray-600 text-decoration-none' href='../../index.php'>Logout</a></li>
  </ul>

</div>
            
                ";
            } else { 
                echo "User";
            }

            ?>


          </div>
        </div>
      </div>
    </nav>
  </header>


  <main>
    <section class="dashboard">
      <div class="container">
        <div class="dashboard-content">
          <div
            class="dashboard-header border-bottom border-text-gray-600 border-1 pb-12 mb-24 d-flex justify-content-between">
            <h2 class="text-beta-1">Hostelers</h2>
            <a href="./add-client.php" class="btn btn-add d-flex align-items-center">
              <i class="fa-solid fa-plus me-8"></i> Add
            </a>
          </div>

          <div class="dashboard-student-list">
            <div class="dashboard-student-list-body" style="overflow-x: auto">
              <table class="table table-striped text-nowrap">
                <thead>
                  <tr class="text-nowrap">
                    <th class="text-gray-600 fw-medium" scope="col">ID</th>
                    <th class="text-gray-600 fw-medium" scope="col">Name</th>
                    <th class="text-gray-600 fw-medium" scope="col">Email</th>
                    <th class="text-gray-600 fw-medium" scope="col">
                      Phone Number
                    </th>
                    <th class="text-gray-600 fw-medium" scope="col">DOB</th>
                    <th class="text-gray-600 fw-medium" scope="col">
                      Food Category
                    </th>
                    <th class="text-gray-600 fw-medium" scope="col">
                      Actions
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                  $sql = "SELECT * FROM users";
                  $query = mysqli_query($conn, $sql);

                  while($result = mysqli_fetch_assoc($query)) {

                    $categoryClass = '';

                    if ($result['food_category'] == 'Non - Veg') {
                      $categoryClass = 'categoryNonVeg';
                  } elseif(($result['food_category'] == 'Vegetarian'))  {
                      $categoryClass = 'categoryVeg';
                  }

                    echo "<tr>
                    <th scope='row'>".$result['id']."</th>
                    <td>".$result['name']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone_number']."</td>
                    <td>".$result['dob']."</td>
                    <td>".$result['food_category']."</td>
                    <td class='d-flex gap-12'>
                    <a href='./edit-client.php?id=$result[id]' class='btn btn-edit bg-warning text-black'>
                      <i class='fa-solid fa-pen'> </i>
                    </a>
                    <button onclick='deleteClient()' class='btn btn-delete bg-danger text-white'>
                      <i class='fa-solid fa-trash'></i>
                    </button>
                  </td>
                  </tr>

                  <script>
                  function deleteClient(){
                    var confirmation = confirm('Do you really want to delete this client');
                    if (confirmation) {
                      window.location.href = 'delete-client.php?id=$result[id]';
                    }
                  }
                  </script>
                
                  ";
                  }
?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/4cbeaa27da.js" crossorigin="anonymous"></script>
</body>

</html>