<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Result management App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
  <meta content="Themesbrand" name="author">
  <!-- App favicon -->
  <link rel="shortcut icon" href="/assets/backend/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css">
  <!-- Bootstrap Css -->
  <link href="/backend/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
  <!-- Icons Css -->
  <link href="/backend/css/icons.min.css" rel="stylesheet" type="text/css">
  <!-- App Css-->
  <link href="/backend/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
  <link href="/backend/css/all.min.css" rel="stylesheet">
  <link href="/backend/css/backend-style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body data-topbar="dark">
  <div id="layout-wrapper">
    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="" class="logo logo-light">
             
              <span class="logo-lg">
                <img src="/images/logo/logo.png" alt="logo" height="40"> 
              </span>
            </a>
          </div>
          <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
            <i class="mdi mdi-menu"></i>
          </button>
        </div>

        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
          <div class="search-bar">
            <input class="search-input form-control" placeholder="Search">
            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
              <i class="mdi mdi-close-circle"></i>
            </a>
          </div>
        </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle header-profile-user" src="/images/images.png" alt="Header Avatar">
              <?php    $session = session(); ?>
              <span class="d-none d-xl-inline-block ml-1"><?php echo $session->user ?></span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- item-->
              <a class="dropdown-item" href="#"><i class="dripicons-user d-inlne-block text-muted mr-2"></i> Profile</a>
              <a class="dropdown-item d-block" href="#"><i class="dripicons-gear d-inlne-block text-muted mr-2"></i> Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/admin/login/logout"><i class="dripicons-exit d-inlne-block text-muted mr-2"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

      <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li>
              <a href="/admin/dashboard">
                <i class="mdi mdi-speedometer"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="/admin/studentclass">
                <i class="fas fa-comment-dollar"></i>
                <span>class</span>
              </a>
            <li>
            <li><a href="/admin/Subjects">
                <i class="fas fa-hourglass-half"></i>
                <span>subjects</span>
              </a>
            </li>
            <li><a href="/admin/students">
                <i class="fas fa-hourglass-half"></i>
                <span>Students</span>
              </a>
            </li>

            <li><a href="">
                <i class="fas fa-hourglass-half"></i>
                <span>Result</span>
              </a>
            </li>

            
            <li><a href="/admin/notice">
                <i class="fas fa-hourglass-half"></i>
                <span>Notices</span>
              </a>
            </li>
          </ul>
          </li>

          </ul>
        </div>
      </div>
    </div>

    <div class="main-content">

      <div class="page-content shadow">
        <div class="container-fluid">
          <?= $page ?>
        </div>
      </div>


      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">

            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- end main content-->
  </div>
  <!-- END layout-wrapper -->

  <!-- Right Sidebar -->
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- JAVASCRIPT -->
  <script src="/backend/libs/jquery/jquery.min.js"></script>
  <script src="/backend/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/backend/libs/metismenu/metisMenu.min.js"></script>
  <script src="/backend/libs/simplebar/simplebar.min.js"></script>
  <script src="/backend/libs/node-waves/waves.min.js"></script>



  <!-- Plugin Js-->
  <script src="/backend/libs/chartist/chartist.min.js"></script>
  <script src="/backend/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>
  <script src="/backend/libs/morris.js/morris.min.js"></script>
  <script src="/backend/libs/raphael/raphael.min.js"></script>
  <!-- Peity chart-->
  <script src="/backend/libs/peity/jquery.peity.min.js"></script>

  <!-- Plugins js-->
  <script src="/backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/backend/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
  </script>


  <script src="/backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>


  <script src="/backend/js/pages/dashboard2.init.js"></script>
  <script src="/backend/libs/tinymce.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="/backend/assets/js/sublime.js?v=2.1"></script>

  <script src="/backend/js/app.js"></script>
  <script src="/backend/libs/chart.js/Chart.bundle.min.js"></script>
  <script src="/backend/js/pages/chartjs.init.js"></script>
  <script src="/backend/js/pages/form-editor.init.js"></script>



  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#resultdatatable').DataTable();
    });
  </script>


</body>
</html>