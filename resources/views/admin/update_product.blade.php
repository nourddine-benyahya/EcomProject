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
                    <h1 class="h1_font">Update product</h1>
                    <form action="{{url('update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-row" style="display: flex; row-gap:50px;">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">product name</label>
                          <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="Product Name"  value="{{$product->title}}">
                        </div>
                        <div class="form-group col-md-6" style="margin-left: 20px;" >
                          <label for="inputPassword4">product Price</label>
                          <input type="number" name="dis_price" class="form-control" id="inputPassword4" placeholder="Price" value="{{$product->price}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress">product description</label>
                        <input type="text" name="description" class="form-control" id="inputAddress" placeholder="description" value="{{$product->description}}">
                      </div>


                      <div class="form-row" style="display: flex; row-gap:50px;">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">product quantity</label>
                            <input type="Number" name="quantity" class="form-control" id="inputEmail4" placeholder="Product Name" value="{{$product->quantity}}">
                          </div>
                          <div class="form-group col-md-4" style="margin-left: 20px;">
                              <label for="inputState">State</label>
                              <select id="inputState" name="category" class="form-control">
                                <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                  @foreach ($category as $category )
                                  <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                                  @endforeach

                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputAddress">Product Image</label>
                          <input type="file" name="image" class="form-control" id="inputAddress">
                        </div>

                      <button type="submit" class="btn btn-primary">Update Product</button>
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