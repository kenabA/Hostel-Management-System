<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hamrostel</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>
      .dropdown-item:active{
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
    <div
      class="offcanvas offcanvas-start"
      tabindex="-1"
      id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel"
    >
      <div class="offcanvas-header p-32 border-bottom-5 border">
        <h3 class="font-24 m-0 fw-semibold">Hamrostel</h3>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body p-32">
        <ul
          class="offcanvas-navigation-lists ls-none d-flex flex-column gap-32 p-0"
        >
          <li class="offcanvas-navigation-list font-18">
            <a
              href="./admin-dashboard.php"
              class="td-none text-gray-500 active-side-nav"
            >
              <i
                class="offcanvas-navigation-list-icon fa-solid fa-chart-simple"
              ></i>
              Dashboard</a
            >
          </li>
          <li class="offcanvas-navigation-list font-18">
            <a
              href="./admin.html"
              class="td-none text-gray-500 non-active-side-nav"
            >
              <i class="offcanvas-navigation-list-icon fa-solid fa-bed"></i>
              Rooms</a
            >
          </li>
          <li class="offcanvas-navigation-list font-18">
            <a
              href="./client.php"
              class="td-none text-gray-500 non-active-side-nav"
            >
              <i class="offcanvas-navigation-list-icon fa-solid fa-user"></i>
              Client</a
            >
          </li>
          <li class="offcanvas-navigation-list font-18">
            <a
              href="./admin.html"
              class="td-none text-gray-500 non-active-side-nav"
            >
              <i class="offcanvas-navigation-list-icon fa-solid fa-gear"></i>
              Settings</a
            >
          </li>
        </ul>
      </div>
    </div>

    <!-----=====-----===== SECTION : HEADER =====-----=====----->
    <header id="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary pb-24 pt-24">
        <div class="container justify-content-between">
          <div class="d-flex justify-content-center gap-18 align-items-center">
            <button
              class="btn text-primary-tint"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasExample"
              aria-controls="offcanvasExample"
            >
              <i class="fa-solid fa-bars font-20"></i>
            </button>
            <h3 class="text-gamma fw-semibold m-0 text-primary-tint">Admin</h3>
          </div>

          <div id="navbarNavAltMarkup">
            <div class="navbar-nav fw-medium">

            <?php

              session_start();
              include '../db_connection.php';

              error_reporting(E_ALL);
              ini_set('display_errors', 1);

              $email = mysqli_real_escape_string($conn, $_SESSION['email']);
              $sql = "SELECT * FROM users WHERE email='$email'";
              $query = mysqli_query($conn, $sql);

              if($query) {
                
                while($result = mysqli_fetch_assoc($query)) {
                    $name = $result['name']; 
                }
                
                echo "
                <div class='dropdown'>
  
  <a type='button' data-bs-toggle='dropdown' aria-expanded='false' class='nav-link dropdown-toggle btn-5 px-24 rounded-3'>Hi, kenabey</a>

  <ul class='dropdown-menu rounded-3'>
    <li class='d-flex gap-8 align-items-center justify-content-center'><i class='fa-solid text-primary fa-power-off'></i> <a class='logout-link text-gray-600 text-decoration-none' href='../index.php'>Logout</a></li>
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
              class="dashboard-header border-bottom border-text-gray-600 border-1 pb-12"
            >
              <h2 class="text-beta-1">Dashboard</h2>
            </div>
            <div class="dashboard-blocks py-48">
              <div class="row gy-24">
                <div class="col-md-4 col-sm-12">
                  <div
                    class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32"
                  >
                    <div class="dashboard-body-block-icon">
                      <i
                        class="fa-solid fa-user bg-primary-tint--1 text-primary font-20 p-24 rounded-5"
                      ></i>
                    </div>
                    <div class="dashboard-body-block-texts d-flex flex-column">
                      <p class="font-18 m-0 mb-8">Registered Clients</p>
                      <?php

                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        $sql = "SELECT COUNT(*) AS total_users FROM users;";
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
                  <div
                    class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32"
                  >
                    <div class="dashboard-body-block-icon">
                      <i
                        class="fa-solid fa-bed bg-sky-blue_tint text-sky-blue font-20 p-24 rounded-5"
                      ></i>
                    </div>
                    <div class="dashboard-body-block-texts d-flex flex-column">
                      <p class="font-18 m-0 mb-8">Total Rooms</p>
                      <span class="text-gamma text-gray-700">48</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12">
                  <div
                    class="dashboard-body-block d-flex gap-32 border-gray-200 border border-2 rounded-4 p-32"
                  >
                    <div class="dashboard-body-block-icon">
                      <i
                        class="fa-solid fa-arrow-down-9-1 bg-light-red text-red font-20 p-24 rounded-5"
                      ></i>
                    </div>
                    <div class="dashboard-body-block-texts d-flex flex-column">
                      <p class="font-18 m-0 mb-8">Remaining Rooms</p>
                      <span class="text-gamma text-gray-700">27</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dashboard-student-list">
              <div class="dashboard-student-list-header mb-24">
                <h3 class="text-gamma">Client List</h3>
              </div>
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
                        Guardian Phone
                      </th>
                      <th class="text-gray-600 fw-medium" scope="col">
                        Status
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php

                        $sql = "SELECT * FROM users";
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

                          echo "<tr>
                          
                          <th scope='row'>".$result['id']."</th>
                          <td>".$result['name']."</td>
                          <td>".$result['email']."</td>
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
    <script src="./js/swiper.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/4cbeaa27da.js"
      crossorigin="anonymous"
    ></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>

    <script src="./js/script.js"></script>
  </body>
</html>
