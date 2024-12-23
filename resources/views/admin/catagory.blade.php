<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  @include('admin.css')
  <style type="text/css">
    .div_center {
      text-align: center;
      padding-top: 40px;
    }

    .h2_font {
      font-size: 40px;
      padding-bottom: 40px;
    }

    .input_color {
      color: black;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      @include('admin.header')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="div_center">
            <h2 class="h2_font">Add Catagory</h2>

            <form action="{{url('/add_catagory')}}" method="POST">
              @csrf
              <input class="input_color" type="text" name="catagory" placeholder="Write catagory Name">
              <input type="submit" class="btn btn-primary" name="submit" value="Add Catagory">
            </form>
          </div>
        </div>
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      @include('admin.script')
      <!-- End custom js for this page -->
</body>

</html>