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
          <a href="./student-dashboard.php" class="td-none text-gray-500 non-active-side-nav">
            <i class="offcanvas-navigation-list-icon fa-solid fa-chart-simple"></i>
            Dashboard</a>
        </li>
        <li class="offcanvas-navigation-list font-18">
          <a href="./catering.php" class="td-none text-gray-500 active-side-nav">
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
              
              session_start();
              include '../../db_connection.php';

              error_reporting(E_ALL);
              ini_set('display_errors', 1);

              $id =  $_SESSION['id'];

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
            class="dashboard-header border-bottom border-text-gray-600 border-1 pb-12 mb-24 d-flex justify-content-between">
            <h2 class="text-beta-1">Catering</h2>
          </div>

          <div class="dashboard-student-list">
            <div class="dashboard-student-list-body" style="overflow-x: auto">
              <table class="table table-striped text-nowrap">
                <thead>
                  <tr class="text-nowrap">
                    <th class="text-gray-600 fw-medium" scope="col">Food ID</th>
                    <th class="text-gray-600 fw-medium" scope="col">Food Name</th>
                    <th class="text-gray-600 fw-medium" scope="col">
                      Food Type
                    </th>
                    <th class="text-gray-600 fw-medium" scope="col">Food Category</th>
                    <th class="text-gray-600 fw-medium" scope="col">
                      Food Cuisine
                    </th>

                  </tr>
                </thead>
                <tbody>

                  <?php

                  $sql = "SELECT * FROM catering";
                  $query = mysqli_query($conn, $sql);

                  while($result = mysqli_fetch_assoc($query)) {

                    echo "<tr>
                    <th scope='row'>".$result['food_id']."</th>
                    <td>".$result['food_name']."</td>
                    <td>".$result['food_type']."</td>
                    <td>".$result['food_category']."</td>
                    <td>".$result['food_cuisine']."</td>
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

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/4cbeaa27da.js" crossorigin="anonymous"></script>
</body>

</html>