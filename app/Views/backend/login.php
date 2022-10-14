<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Rent App</title>
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
  <link href="/backend/css/all.min.css" rel="stylesheet">
  <link href="/backend/css/backend-style.css" rel="stylesheet">

</head>

<body class="auth-body-bg">

    <div class="container-fluid">
        <!-- Log In page -->
        <div class="row">
            <div class="col-lg-3 pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">

                        <h3 class="text-center m-0">
                            <a href="" class="logo logo-admin"><img src="/backend/assets/frontend/logo/logo.jpg" height="60" alt="logo" class="my-3"></a>
                        </h3>

                        <div class="px-2 mt-2">
                            <h4 class="text-muted font-size-18 mb-2 text-center">Welcome Back !</h4>
                            <p class="text-muted text-center">Sign in to continue to Result Management</p>

                            <form class="form-horizontal my-4" action="/admin/login" method="post">
                              <?php  alertMsg() ?>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" name="username" class="form-control"  placeholder="Enter username">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control"  placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="mt-4 text-center">
                            <p class="mb-0">© 2021-2022 Crafted with <i class="mdi mdi-heart text-danger"></i> by Sublime Technologies</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 p-0 vh-100  d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center">
                    <div class="account-title text-center text-white">
                        <h4 class="mt-3 text-white">Welcome To <span class="text-warning">Dellna India</span> </h4>
                        <h1 class="text-white">Let's Get Started</h1>
                        <div class="border w-25 mx-auto border-warning"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Log In page -->
    </div>


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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="/backend/assets/js/sublime.js?v=2.1"></script>

<script src="/backend/js/app.js"></script>
<script src="/backend/libs/chart.js/Chart.bundle.min.js"></script>
<script src="/backend/js/pages/chartjs.init.js"></script>
<script src="/backend/js/pages/form-editor.init.js"></script>



<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>


</body>

</html>