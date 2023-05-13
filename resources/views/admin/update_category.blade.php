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
                    <h1 class="h1_font">Update category</h1>
                    <form action="{{url('update_category_confirm',$category->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label for="inputAddress">category name</label>
                        <input type="text" name="name" class="form-control" id="inputAddress" placeholder="name" value="{{$category->category_name}}">
                      </div>


                    
                      <button type="submit" class="btn btn-primary">Update category</button>
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