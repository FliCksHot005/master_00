<?php
session_start();
if (!isset($_SESSION["uid"]) && !isset($_SESSION["username"])) {
  header("location: sign-in.php");
  exit();
};
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Visiting card maker</title>

  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />




  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />

  <link href="plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />

  <link href="plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

  <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  <link href="plugins/toaster/toastr.min.css" rel="stylesheet" />

  <link href="plugins/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- MONO CSS -->
  <link href="css/style.css" id="main-css-href" rel="stylesheet" />

  <!-- <link href="css/s.css" rel="stylesheet" /> -->



  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="plugins/nprogress/nprogress.js"></script>
</head>

<body class="navbar-fixed sidebar-fixed sidebar-minified" id="body">
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>


  <div id="toaster"></div>


  <!-- ====================================
    ——— WRAPPER
    ===================================== -->
  <div class="wrapper">


    <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
    <aside class="left-sidebar sidebar-dark " id="left-sidebar" >
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="index.html">
            <img src="images/logo.png" alt="Mono">
            <span class="brand-name">MONO</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li><a class="sidenav-item-link" href="index.php">
                <i class="mdi mdi-briefcase-account-outline"></i>
                <span class="nav-text">Home</span>
              </a>
            </li>
            <li><a href="catoption.php">
                <i class="mdi mdi-account-group"></i>
                <span class="nav-text">category</span>
              </a>
            </li>
            <li><a href="about-us.php">
                <i class="mdi mdi-alert-circle"></i>
                <span class="nav-text">About US</span>
              </a>
            </li>
            <li><a href="sign-in.php">
                <i class="mdi mdi-login"></i>
                <span class="nav-text">Login</span></a>
            </li>
            <li><a href="sign-up.php">
                <i class="mdi mdi-account"></i>
                <span class="nav-text">Register</span>
              </a>
            </li>
            <li><a href="contact-us.php">
                <i class="mdi mdi-contact-mail"></i>
                <span class="nav-text">contact Us</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="sidebar-footer">
          <div class="sidebar-footer-content">
            <ul class="d-flex">
              <li>
                <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a>
              </li>
              <!-- <li>
                <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </aside>



    <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
    <div class="page-wrapper">

      <!-- Header -->
      <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>

          <span class="page-title">Home</span>

          <div class="navbar-right ">

            <!-- search form -->
            <div class="search-form">
              <form action="index.html" method="get">
                <div class="input-group input-group-sm" id="input-group-search">
                  <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                  <div class="input-group-append">
                    <button class="btn" type="button"><i class="fa-solid fa-magnifying-glass"></i></i></button>
                  </div>
                </div>
              </form>
              <ul class="dropdown-menu dropdown-menu-search">

                <!-- <li class="nav-item">
                  <a class="nav-link" href="index.html">Morbi leo risus</a>
                </li> -->
              </ul>

            </div>

            <ul class="nav navbar-nav">
              <!-- Offcanvas -->
              <li class="custom-dropdown">
                <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:">
                  <i class="mdi mdi-cart-outline icon"></i>
                </a>
              </li>

              <!-- User Account -->
              <li class="dropdown user-menu">
                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                  <span class="d-none d-lg-inline-block">John Doe</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a class="dropdown-link-item" href="user-profile.html">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">My Profile</span>
                    </a>
                  </li>
                  <!-- <li>
                    <a class="dropdown-link-item" href="email-inbox.html">
                      <i class="mdi mdi-email-outline"></i>
                      <span class="nav-text">Message</span>
                      <span class="badge badge-pill badge-primary">24</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-link-item" href="user-activities.html">
                      <i class="mdi mdi-diamond-stone"></i>
                      <span class="nav-text">Activitise</span></a>
                  </li> -->
                  <li>
                    <a class="dropdown-link-item" href="user-account-settings.html">
                      <i class="mdi mdi-settings"></i>
                      <span class="nav-text">Account Setting</span>
                    </a>
                  </li>
                  <li class="dropdown-footer">
                    <a class="dropdown-link-item" href="sign-in.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- main body -->

      <div class="card-deck" style="margin: 20px auto;">
        <div class="card">
          <a href="subcat.php?id=7"><img class="card-img-top" src="images/sub/foodservices.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title ">Restaurant</h5>
            <p class="card-text pb-3">Food visiting cards, also known as food business cards or restaurant business cards, can be used in various ways to promote a food-related business or service.Provide your food visiting card to customers at your restaurant, bakery, cafe, food truck, or catering service. This can serve as a reminder of your business and encourage repeat visits or referrals.
            </p>
          </div>
        </div>

        <div class="card">
          <a href="subcat.php?id=6"><img class="card-img-top" src="images/sub/realestate.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title ">Real Estate</h5>
            <p class="card-text pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco ut laboris nisi ut
              aliquip ex commodo consequat. duis
              aute irure dolor in reprehenderit.</p>
          </div>
        </div>

        <div class="card">
          <a href="subcat.php?id=4"><img class="card-img-top" src="images/sub/legal.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title ">Legal</h5>
            <p class="card-text pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco ut laboris nisi ut
              aliquip ex commodo consequat. duis
              aute irure dolor in reprehenderit.</p>
          </div>
        </div>
      </div>
      <!-- difrant card -->
      <div class="row" style="margin: 1px;">
        <div class="col-md-12 col-lg-6 col-xl-3">
          <div class="card mb-4 bg-overlay-primary">
            <img class="card-img-top" src="images/sub/clothing.jpg">
            <div class="card-img-overlay">
              <h5 class="card-title text-white">Clothing</h5>
              <p class="card-text text-white pb-4 pt-1">Provide your clothing visiting card to customers at your retail store, boutique, or pop-up shop. </p>
              <a href="subcat.php?id=3" class="text-white">Last update 2 mins ago</a>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-lg-6 col-xl-3">
          <div class="card mb-4 bg-overlay-success">
            <img class="card-img-top" src="images/sub/travelagencies.jpg">
            <div class="card-img-overlay">
              <h5 class="card-title text-white">Travel Agencies</h5>
              <p class="card-text pb-4 pt-1 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                eiusmod tempor
              </p>
              <a href="subcat.php?id=1" class="text-white">Last update 2 mins ago</a>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-lg-6 col-xl-3">
          <div class="card mb-4 bg-overlay-secondary">
            <img class="card-img-top" src="images/sub/businessservices.jpg">
            <div class="card-img-overlay">
              <h5 class="card-title text-white">Business Services</h5>
              <p class="card-text text-white pb-4 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                eiusmod tempor
              </p>
              <a href="subcat.php?id=5" class="text-white">Last update 2 mins ago</a>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-lg-6 col-xl-3">
          <div class="card mb-4 bg-overlay-info">
            <img class="card-img-top" src="images/sub/photography.jpg">
            <div class="card-img-overlay">
              <h5 class="card-title text-white ">Photography</h5>
              <p class="card-text pb-4 pt-1 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                eiusmod tempor
              </p>
              <a href="subcat.php?id=2" class="text-white">Last update 2 mins ago</a>
            </div>
          </div>
        </div>

      </div>
      <!-- Recently Updated -->

      <div class="card card-default" style="margin: 16px">
        <div class="card-header">
          <h2> Available Products</h2>
        </div>
        <?php
        // Assuming you have already connected to your MySQL database

        // Fetching random data from the database
        $cnn = new mysqli("localhost", "root", "", "ecard");
        $sql = "SELECT * FROM product ORDER BY RAND() LIMIT 8"; // Assuming 8 cards are required
        $result = mysqli_query($cnn, $sql);

        if ($result) {
        ?>
          <div class="card-body">
            <div class="card-deck">
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <div class="col-lg-6 col-xl-3">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title mb-1"><?php echo $row['pname']; ?></h5>
                      <a href="subcat.php?id=<?php echo $row['cid']; ?>"><img class="card-img-top" src="images/sub/<?php echo $row['pimg1']; ?>" alt="Card image cap" style="padding-bottom: 10px;"></a>
                      <p class="card-text pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>
                      <a href="subcat.php?id=<?php echo $row['cid']; ?>" class="btn btn-link px-0 text-info mr-3">Card Link</a>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        <?php
        } else {
          echo "Error fetching data: " . mysqli_error($connection);
        }
        ?>


      </div>
      <!-- end of main body -->
    </div>
  </div>

  <!-- Card Offcanvas -->
  <div class="card card-offcanvas" id="contact-off">
    <div class="card-header">
      <h2>Contacts</h2>
      <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
    </div>
    <!-- todo cart -->
    <div class="card-body">

      <div class="mb-4">
        <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts...">
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-01.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Selena Wagner</span>
            <span class="discribe">Designer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-02.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Walter Reuter</span>
            <span>Developer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-03.jpg" alt="User Image">
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Larissa Gebhardt</span>
            <span>Cyber Punk</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-04.jpg" alt="User Image">
          </a>

        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Albrecht Straub</span>
            <span>Photographer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-05.jpg" alt="User Image">
            <span class="active bg-danger"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Leopold Ebert</span>
            <span>Fashion Designer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-06.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Selena Wagner</span>
            <span>Photographer</span>
          </a>
        </div>
      </div>

    </div>
  </div>




  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/simplebar/simplebar.min.js"></script>
  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



  <script src="plugins/apexcharts/apexcharts.js"></script>



  <script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>



  <script src="plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>



  <script src="plugins/daterangepicker/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <script>
    jQuery(document).ready(function() {
      jQuery('input[name="dateRange"]').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        locale: {
          cancelLabel: 'Clear'
        }
      });
      jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
        jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
      });
      jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
        jQuery(this).val('');
      });
    });
  </script>



  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



  <script src="plugins/toaster/toastr.min.js"></script>



  <script src="js/mono.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/map.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>