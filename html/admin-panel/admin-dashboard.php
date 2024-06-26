<?php 
session_start();

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
          <a href="./client.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-user"></i>
            Hostelers</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./catering.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-burger"></i>
            Catering</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./guardian-detail.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-hands-holding-child"></i>
            Guardian Details</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./rooms.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-bed"></i>
            Rooms</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./approval.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-list-check"></i>
            Approval</a>
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

              
              include '../../db_connection.php';

              error_reporting(E_ALL);
              ini_set('display_errors', 1);

              $id =  $_SESSION['id'];
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
          <div class="dashboard-header border-bottom border-text-gray-600 border-1 pb-12">
            <h2 class="text-beta-1">Dashboard</h2>
          </div>
          <div class="dashboard-blocks py-48">
            <div class="row gy-24">
              <div class="col-md-4 col-sm-12">
                <div class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32">
                  <div class="dashboard-body-block-icon">
                    <i class="fa-solid fa-user bg-primary-tint--1 text-primary font-20 p-24 rounded-5"></i>
                  </div>
                  <div class="dashboard-body-block-texts d-flex flex-column">
                    <p class="font-18 m-0 mb-8">Registered Hostelers</p>
                    <?php

                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        $sql = "SELECT COUNT(*) AS total_users FROM users where approved='Yes';";
                        $query = mysqli_query($conn, $sql);
                        
                        
                        if($query) {
                          
                          $result = mysqli_fetch_assoc($query);
                          $totalUsersCount = $result['total_users'];

                          echo "<span class='text-gamma text-gray-700'>$totalUsersCount</span>";

                        } else {
                          echo "<span class='text-gamma text-gray-700'>No Clients</span>";
                        }

?>

                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32">
                  <div class="dashboard-body-block-icon">
                    <i class="fa-solid fa-bed bg-sky-blue_tint text-sky-blue font-20 p-24 rounded-5"></i>
                  </div>
                  <div class="dashboard-body-block-texts d-flex flex-column">
                    <p class="font-18 m-0 mb-8">Total Rooms</p>
                    <span class="text-gamma text-gray-700">48</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32">
                  <div class="dashboard-body-block-icon">
                    <i class="fa-solid fa-arrow-down-9-1 bg-light-red text-red font-20 p-24 rounded-5"></i>
                  </div>
                  <div class="dashboard-body-block-texts d-flex flex-column">
                    <p class="font-18 m-0 mb-8">Remaining Rooms</p>
                    <span class="text-gamma text-gray-700">27</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex gap-24 mb-48 justify-content-center align-items-center">
            <?php 
            $sql = "SELECT
            SUM(CASE WHEN food_category = 'Non - Veg' THEN 1 ELSE 0 END) AS count_non_veg,
            SUM(CASE WHEN food_category = 'Veg' THEN 1 ELSE 0 END) AS count_veg
        FROM users where approved='Yes';
        ";
            $query = mysqli_query($conn, $sql);
            
            if($query) {
              
              $result = mysqli_fetch_assoc($query);
              $nonVegCount = $result['count_non_veg'];
              $vegCount = $result['count_veg'];

              echo "<div class='border-gray-200 border border-2 rounded-4' data-non-veg='$nonVegCount' data-veg='$vegCount' id='donutchart'
              style='width:100%;  height: 400px'>
            </div> ";

            }

            $sql2 = "SELECT
            SUM(CASE WHEN gender = 'Male' THEN 1 ELSE 0 END) AS male,
            SUM(CASE WHEN gender = 'Female' THEN 1 ELSE 0 END) AS female
            FROM users where approved='Yes';
        ";
            $query2 = mysqli_query($conn, $sql2);
            
            if($query2) {
              
              $result = mysqli_fetch_assoc($query2);
              $male = $result['male'];
              $female = $result['female'];

              echo "<div class='border-gray-200 border border-2 rounded-4' data-male='$male' data-female='$female' id='piechart'
              style='width:100%;  height: 400px'>
            </div>";

            }

            ?>

          </div>
          <div class="dashboard-student-list" id="hostelerList">
            <div class="dashboard-student-list-header mb-24 d-flex align-items-center gap-16">
              <h3 class="text-gamma mb-0">Hosteler List</h3>
              <button onclick="reloadPage()" class="refresh-icon border-0 bg-white text-primary">
                <i class="fa-solid fa-refresh me-12"></i>
              </button>
            </div>
            <div class="dashboard-student-list-body" style="overflow-x: auto">
              <table class="table table-striped text-nowrap">
                <thead>
                  <tr class="text-nowrap">
                    <th class="text-gray-600 fw-medium" scope="col">ID</th>
                    <th class="text-gray-600 fw-medium" scope="col">Name</th>
                    <th class="text-gray-600 fw-medium" scope="col">Email</th>
                    <th class="text-gray-600 fw-medium" scope="col">Gender</th>
                    <th class="text-gray-600 fw-medium" scope="col">
                      Phone Number
                    </th>
                    <th class="text-gray-600 fw-medium" scope="col">DOB</th>
                    <th class="text-gray-600 fw-medium" scope="col">
                      Guardian Phone
                    </th>
                    <th class="text-gray-600 fw-medium" scope="col">
                      Status
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                        $sql = "SELECT * FROM users where approved='Yes'";
                        $query = mysqli_query($conn, $sql);

                        if (!$result) {
                          die('Invalid Query');
                        }
                        
                        while($result = mysqli_fetch_assoc($query)) {

                          $statusClass = '';
                          

                          if ($result['status'] == 'Active') {
                            $statusClass = 'status-active';
                        } elseif ($result['status'] == 'Inactive') {
                            $statusClass = 'status-inactive';
                        } elseif ($result['status'] == 'Pending') {
                            $statusClass = 'status-pending';
                        }

                        $genderClass = '';

                        if($result['gender'] == 'Male'){
                          $genderClass = 'fa-solid fa-mars text-male';
                        } elseif($result['gender'] == 'Female') {
                          $genderClass = 'fa-solid fa-venus text-female';
                        }
                        
                          echo "<tr>        
                          <th scope='row'>".$result['id']."</th>
                          <td>".$result['name']."</td>
                          <td>".$result['email']."</td>
                          <td class='ps-24'><i class='".$genderClass."'></i></td>
                          <td>".$result['phone_number']."</td>
                          <td>".$result['dob']."</td>
                          <td>".$result['guardian_phone_number']."</td>
                          <td class='".$statusClass."'>".$result['status']."</td>
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
  <script src="../../js/pieChart.js"></script>
  <script src="../../js/donutChart.js"></script>
  <script src="../../js/adminPanelScript.js"></script>
</body>

</html>