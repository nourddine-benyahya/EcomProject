<!DOCTYPE html>
<html lang="en">
  <head>

   @include('admin.css')
   
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
      @include('admin.body')
    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
</body>
</html>
