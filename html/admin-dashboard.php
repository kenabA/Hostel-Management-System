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
              href="./admin-dashboard.html"
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
              <a
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"
                class="nav-link btn-5 rounded-5 px-24"
                >Hi, Kenab <i class="ms-8 fa-solid fa-chevron-down"></i
              ></a>
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
                      <span class="text-gamma text-gray-700">12</span>
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
                    <tr>
                      <th scope="row">1</th>
                      <td>Kenab Kushal K.C.</td>
                      <td>kebab.bahadur@gmail.com</td>
                      <td>9842742225</td>
                      <td>6th June, 2003</td>
                      <td>9841321674</td>
                      <td class="status-active">Active</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Niraj Chaudharya</td>
                      <td>niraj@gmail.com</td>
                      <td>9841234587</td>
                      <td>13th May, 2003</td>
                      <td>9805618245</td>
                      <td class="status-active">Active</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Abhishek KC</td>
                      <td>avsek@gmail.com</td>
                      <td>9844124587</td>
                      <td>13th September, 2005</td>
                      <td>9805618245</td>
                      <td class="status-inactive">Inactive</td>
                    </tr>
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
