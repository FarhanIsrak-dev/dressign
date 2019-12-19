<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dressign Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/node_modules/simple-line-icons/css/simple-line-icons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/datatables.min.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('design/images/logo.jpg')}}" />
</head>

<body>
  <div class="container-scroller">
    @include('backend.partials.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('backend.partials.left_sidebar')
      @yield('content')

    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}" ></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>



  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- endinject -->
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    } );
  </script>
  <!-- Plugin js for this page-->
  <script src="{{asset('admin/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin/js/data-table.min.js')}}"></script>
  <script src="{{asset('admin/js/dashboard.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="{{asset('admin/js/maps.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>