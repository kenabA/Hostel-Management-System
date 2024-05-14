<?php 
session_start();

$id =  $_SESSION['id'];

if (isset($_GET['login'])) {
  if ($_GET['login'] == 'true') {
echo" <div class=' p-3 position-fixed'  style='z-index: 11; bottom: 5%; right: 5%; '>
        <div id='liveToast' class='toast show hide' role='alert' aria-live='assertive' aria-atomic='true'>
         <div class='toast-header '>
        <i class='fa-solid fa-check me-12 text-white p-8 rounded-5 bg-success'></i>
          <strong class='me-auto'>Login</strong>
          <small>Just Now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
      <div class='toast-body'>
       Logged in Successfully!
      </div>
    </div>
</div> ";

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
          <a href="./admin-dashboard.php" class="td-none text-gray-500 active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-chart-simple"></i>
            Dashboard</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./catering.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-burger"></i>
            Catering</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./rooms.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-bed"></i>
            Rooms</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./profile.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-user"></i>
            Profile</a>
        </li>
      </ul>
    </div>
  </div>

  <!-----=====-----===== SECTION : HEADER =====-----=====----->
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary pb-24 pt-24">
      <div class="container justify-content-between align-items-center">
        <div class="d-flex justify-content-center gap-18 align-items-center">
          <button class="btn text-primary-tint" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars font-20"></i>
          </button>
          <h3 class="text-gamma fw-semibold m-0 text-primary-tint">Student</h3>
        </div>
        <div id="navbarNavAltMarkup" class="d-flex gap-24 align-items-center">
          <div class="header-time d-flex gap-12 align-items-center">
            <i class="fa-regular text-primary-tint p-8 bg-primary-tint--1 text-primary rounded-5 fa-calendar"></i>
            <?php 
          $date = date("jS F, Y");
          echo "<p class='fw-semibold m-0 text-primary-tint font-18'>$date</p>"
        ?>

          </div>
          <button class="py-12 px-16 btn rounded-5 border border-white text-white">
            <i class="fa-solid fa-bell font-20"></i>
          </button>
          <div class="navbar-nav fw-medium">

            <?php

              
              include '../../db_connection.php';

              error_reporting(E_ALL);
              ini_set('display_errors', 1);

             
              $sql = "SELECT * FROM users WHERE id='$id'";
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
                echo "
                <div class='dropdown'>
  
  <a type='button' data-bs-toggle='dropdown' aria-expanded='false' class='nav-link dropdown-toggle btn-5 px-24 rounded-3'>Hi, User</a>

  <ul class='dropdown-menu rounded-3'>
    <li class='d-flex gap-8 align-items-center justify-content-center'><i class='fa-solid text-primary fa-power-off'></i> <a class='logout-link text-gray-600 text-decoration-none' href='../index.php'>Logout</a></li>
  </ul>

</div>
            
                ";
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
            class="dashboard-header border-bottom border-text-gray-600 border-1 pb-12 d-flex justify-content-between align-items-center">
            <h2 class="text-beta-1">Dashboard</h2>
            <div class="active-status d-flex align-items-center justify-content-center gap-16">
              <p class='m-0 text-gray-500'>Change active status</p>
              <?php 

              $sql = "SELECT status FROM users where id='$id';";
              $query = mysqli_query($conn, $sql);

              $result = mysqli_fetch_assoc($query);

              $status = $result['status'];

              if($status == "Active") {
                echo "<button onclick='turnOff($id)' class='btn bg-danger text-white'>Turn off</button>";
              } else {
                
                echo "<button onclick='turnOn($id)' class='btn bg-success text-white'>Turn on</button>";
              }
              
              ?>

            </div>
          </div>
          <div class="dashboard-blocks py-48">
            <div class="row gy-24">
              <div class="col-md-4 col-sm-12">
                <div class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32">
                  <div class="dashboard-body-block-icon">
                    <i class="fa-solid fa-user bg-primary-tint--1 text-primary font-20 p-24 rounded-5"></i>
                  </div>
                  <div class="dashboard-body-block-texts d-flex flex-column">
                    <p class="font-18 m-0 mb-8">Full Name</p>
                    <?php

                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        $sql = "SELECT name FROM users where id='$id';";
                        $query = mysqli_query($conn, $sql);
                          
                        $result = mysqli_fetch_assoc($query);
                        $name = $result['name'];

                          echo "<span class='font-18 fw-medium text-gray-700'>$name</span>";

?>

                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32">
                  <div class="dashboard-body-block-icon">
                    <i class="fa-solid fa-venus-mars bg-primary-tint--1 text-primary font-20 p-24 rounded-5"></i>
                  </div>
                  <div class="dashboard-body-block-texts d-flex flex-column">
                    <p class="font-18 m-0 mb-8">Gender</p>
                    <?php

                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        $sql = "SELECT gender FROM users where id='$id';";
                        $query = mysqli_query($conn, $sql);
                          
                        $result = mysqli_fetch_assoc($query);
                        $name = $result['gender'];

                          echo "<span class='font-18 fw-medium text-gray-700'>$name</span>";

?>

                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32">
                  <div class="dashboard-body-block-icon">
                    <i class="fa-solid fa-book bg-primary-tint--1 text-primary font-20 p-24 rounded-5"></i>
                  </div>
                  <div class="dashboard-body-block-texts d-flex flex-column">
                    <p class="font-18 m-0 mb-8">Course</p>
                    <?php

                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        $sql = "SELECT course FROM users where id='$id';";
                        $query = mysqli_query($conn, $sql);
                          
                        $result = mysqli_fetch_assoc($query);
                        $name = $result['course'];

                        echo "<span class='font-18 fw-medium text-gray-700'>$name</span>";

?>

                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32">
                  <div class="dashboard-body-block-icon">
                    <i class="fa-solid fa-bowl-food bg-primary-tint--1 text-primary font-20 p-24 rounded-5"></i>
                  </div>
                  <div class="dashboard-body-block-texts d-flex flex-column">
                    <p class="font-18 m-0 mb-8">Food Category</p>
                    <?php

                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        $sql = "SELECT food_category FROM users where id='$id';";
                        $query = mysqli_query($conn, $sql);
                          
                        $result = mysqli_fetch_assoc($query);
                        $name = $result['food_category'];

                          echo "<span class='font-18 fw-medium text-gray-700'>$name</span>";

?>

                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32">
                  <div class="dashboard-body-block-icon">
                    <i class="fa-solid fa-bed bg-primary-tint--1 text-primary font-20 p-24 rounded-5"></i>
                  </div>
                  <div class="dashboard-body-block-texts d-flex flex-column">
                    <p class="font-18 m-0 mb-8">Room Number</p>
                    <span class="fw-medium font-18 text-gray-700">12</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32">
                  <div class="dashboard-body-block-icon">
                    <i class="fa-solid fa-power-off bg-primary-tint--1 text-primary font-20 p-24 rounded-5"></i>
                  </div>
                  <div class="dashboard-body-block-texts d-flex flex-column">
                    <p class="font-18 m-0 mb-8">Active Status</p>

                    <?php

                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        $sql = "SELECT status FROM users where id='$id';";
                        $query = mysqli_query($conn, $sql);
  
                        $result = mysqli_fetch_assoc($query);
                        $status = $result['status'];

                        echo  $status == "Active" ? "<span class='fw-medium font-18 text-success'>Active</span>" :  ($status == "Inactive" ? "<span class='fw-medium font-18 text-danger'>Inactive</span>" : "<span class='fw-medium font-18 text-primary'>Pending</span>");
                        
?>


                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="dashboard-student-list" id="hostelerList">
            <div class="dashboard-student-list-header mb-24 d-flex align-items-center gap-16">
              <h3 class="text-gamma mb-0">Announcements</h3>
              <button onclick="reloadPage()" class="refresh-icon border-0 bg-white text-primary">
                <i class="fa-solid fa-refresh me-12"></i>
              </button>
            </div>
            <div class="dashboard-student-list-body" style="overflow-x: auto">
              <table class="table table-striped text-nowrap">
                <thead>
                  <tr class="text-nowrap">
                    <th class="text-gray-600 fw-medium" scope="col">ID</th>
                    <th class="text-gray-600 fw-medium" scope="col">Message</th>
                    <th class="text-gray-600 fw-medium" scope="col">Note</th>
                    <th class="text-gray-600 fw-medium" scope="col">Date Posted</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                        $sql = "SELECT * FROM announcements";
                        $query = mysqli_query($conn, $sql);

                        if (!$result) {
                          die('Invalid Query');
                        }
                        
                        while($result = mysqli_fetch_assoc($query)) {

                        $custom_msg = "Your <span class='text-gray-700 fw-medium'>".$result['message_type']."</span> is ready, please be at the Dining hall to collect your food.";
                        
                          echo "<tr>        
                          <th scope='row'>".$result['id']."</th>
                          <td>".$custom_msg."</td>
                          <td>".$result['message']."</td>
                          <td>".$result['date_posted']."</td>
                          
                        </tr>
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

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/4cbeaa27da.js" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <!-- CHARTS -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script src="../../js/studentPanelScript.js"></script>
</body>

</html>