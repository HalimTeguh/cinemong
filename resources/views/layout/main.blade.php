<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cinemon | Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ mix('/resources/template/assets/vendors/mdi/css/materialdesignicons.min.css') }} ">
    <link rel="stylesheet" href="{{ mix('/resources/template/assets/vendors/css/vendor.bundle.base.css') }} ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ mix('/resources/template/assets/vendors/jvectormap/jquery-jvectormap.css') }} ">
    <link rel="stylesheet" href="{{ mix('/resources/template/assets/vendors/flag-icon-css/css/flag-icon.min.css') }} ">
    <link rel="stylesheet" href="{{ mix('/resources/template/assets/vendors/owl-carousel-2/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ mix('/resources/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }} ">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ mix('/resources/template/assets/css/style.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ mix('/resourcestemplate/assets/images/favicon.png') }}" />
    <style type="text/tailwindcss">
      * {
          /* border: red 1px solid; */
          font-family: 'Poppins', sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
        {{-- NAVBAR SAMPING --}}
      @include('./partial/navSamping')


      <!-- NAVBAR ATAS -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('./partial/navAtas')

        <!-- MAIN CONTENT -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              @yield('content')
            </div>
          </div>
          <!-- MAIN CONTENT ends -->

          <!-- partial:partials/_footer.html -->
          @include('./partial/footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ mix('/resources/template/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ mix('/resources/template/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ mix('/resources/template/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ mix('/resources/template/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ mix('/resources/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ mix('/resources/template/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ mix('/resources/template/assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ mix('/resources/template/assets/js/off-canvas.js') }}"></script>
    <script src="{{ mix('/resources/template/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ mix('/resources/template/assets/js/misc.js') }}"></script>
    <script src="{{ mix('/resources/template/assets/js/settings.js') }}"></script>
    <script src="{{ mix('/resources/template/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ mix('/resources/template/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>