<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Administrador</title>
    <link rel="stylesheet" href="assetsDash/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assetsDash/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assetsDash/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assetsDash/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assetsDash/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assetsDash/css/style.css" />
    <link rel="shortcut icon" href="assetsDash/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
        {{-- start del sidebar --}}
      @include('layouts.menuSide')
      {{-- end del sidebar --}}
      <div class="container-fluid page-body-wrapper">
        @include('layouts.sidebar')
        {{-- panel de documento dashboard --}}
        @yield('content')        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assetsDash/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assetsDash/vendors/chart.js/Chart.min.js"></script>
    <script src="assetsDash/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assetsDash/vendors/flot/jquery.flot.js"></script>
    <script src="assetsDash/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assetsDash/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assetsDash/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assetsDash/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assetsDash/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assetsDash/js/off-canvas.js"></script>
    <script src="assetsDash/js/hoverable-collapse.js"></script>
    <script src="assetsDash/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assetsDash/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>