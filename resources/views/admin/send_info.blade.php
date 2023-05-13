<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">



  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
      @include('admin.AdminDashboard')
        <!-- partial -->

        <div class="main-panel">

            <div class="content-wrapper">

                <h1 style="text-align:center; font-size:25px;">Send Email to {{$order->email}}</h1>
                <br>
                <br>
                <br><br><br><br>

                <form action="{{url('send_user_email',$order->id)}}" style="text-align: center ; align-content: center;" method="POST">
                    @csrf

                   

                        <label for="">context :</label>
                        <input class="text_color" type="text" style="border-radius: 22px ; width: 500px" name="body" placeholder="Write a description" required="">

                   

                    <div style="padding-left:35%; padding-top:30px">

                        <input type="submit" value="Send Email" class="btn btn-primary">
                    </div>

                </form>




            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')

    
</main>


</body>

</html>

