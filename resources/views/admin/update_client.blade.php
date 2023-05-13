<!DOCTYPE html>
<html lang="en">
  <head>

    {{-- <base href="/public"> --}}


   <style type="text/css">

   .div_center{

    text-align: center;
    padding-top: 40px;
   }
   .h1_font{

    font-size: 40px;
    padding-bottom: 40px;
   }
   .text_color{
    color: black;
    padding-bottom:
   }
   label{
    display: inline-block;
    width: 200px;
   }
   .div_design{
    padding-bottom: 15px;
   }

   </style>

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

                @if (session()->has('message'))

                <div class="alert alert-success">

          {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> --}}

                    {{session()->get('message')}}

                </div>

                @endif


                <div >
                    <h1 class="h1_font">Update client</h1>
                    <form action="{{url('update_client_confirm',$client->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-row" style="display: flex; row-gap:50px;">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">name</label>
                          <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name"  value="{{$client->name}}">
                        </div>
                        <div class="form-group col-md-6" style="margin-left: 20px;" >
                          <label for="inputPassword4">email</label>
                          <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="email" value="{{$client->email}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress">address</label>
                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="address" value="{{$client->address}}">
                      </div>


                      <div class="form-row" style="display: flex; row-gap:50px;">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">phone</label>
                            <input type="tel" name="phone" class="form-control" id="inputEmail4" placeholder="phone" value="{{$client->phone}}">
                      </div>
                          
                        </div>

                        

                      <button type="submit" class="btn btn-primary">Update Client</button>
                    </form> 



                </div>

            </div>

        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')



</main>


</body>

</html>