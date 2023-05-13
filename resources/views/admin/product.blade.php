<!DOCTYPE html>
<html lang="en">
  <head>


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


                <div class="div_center">
                    <h1 class="h1_font">Add product</h1>

                    <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                    <div class="div_design">
                    <label for="">product title :</label>
                    <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
                    </div>

                    <div class="div_design">
                    <label for="">product description :</label>
                    <input class="text_color" type="text" name="description" placeholder="Write a description" required="">
                    </div>

                    <div class="div_design">
                    <label for="">product price :</label>
                    <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
                    </div>

                    <div class="div_design">
                     <label for="">Discount Price :</label>
                     <input class="text_color" type="number" name="dis_price" placeholder="Write a discount ">
                     </div>

                    <div class="div_design">
                    <label for="">product quantity :</label>
                    <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="">
                    </div>

                    <div class="div_design">
                    <label for="">product category :</label>
                    <select class="text_color" name="category" id="" required="">
                    <option value="" selected="">Add a category here</option>

                    @foreach ($category as $category )

                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                    @endforeach
                    </select>
                    </div>

                    <div class="div_design">
                    <label for="">product iamge here :</label>
                    <input  type="file" name="image">
                    </div>

                    <div class="div_design">
                    <input type="submit" value="Add Product" class="btn btn-primary">
                    </div>

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

