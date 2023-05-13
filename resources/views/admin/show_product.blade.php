<!DOCTYPE html>
<html lang="en">
  <head>


 
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

            {{-- <div class="content-wrapper"> --}}

                @if (session()->has('message'))

                <div class="alert alert-success">

          {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> --}}

                    {{session()->get('message')}}

                </div>

                @endif

                <h1 class="font_size">Product</h1>

                <div class="card card p-5" style="width: 100%">
                    <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row" style="display: flex; row-gap:50px;">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">product name</label>
                            <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="Product Name">
                          </div>
                          <div class="form-group col-md-6" style="margin-left: 20px;" >
                            <label for="inputPassword4">product Price</label>
                            <input type="number" name="price" class="form-control" id="inputPassword4" placeholder="Price">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">product description</label>
                          <input type="text" name="description" class="form-control" id="inputAddress" placeholder="description">
                        </div>
 

                        <div class="form-row" style="display: flex; row-gap:50px;">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">product quantity</label>
                              <input type="Number" name="quantity" class="form-control" id="inputEmail4" placeholder="quantity">
                            </div>
                            <div class="form-group col-md-4" style="margin-left: 20px;">
                                <label for="inputState">category</label>
                                <select id="inputState" name="category" class="form-control">
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

                        <button type="submit" class="btn btn-primary">Add Product</button>
                      </form> 
<div style="display: flex;" >
                      <a class="nav-link  " href="{{url('products/export/ ')}}"> <button type="button" class="btn btn-primary">export products</button></a>
                      <form style="margin-left: 50%" action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="display: flex;" >
                        <input type="file" style="width: 20% ; height: 40%;" name="file" class="form-control">
                        <button class="btn btn-success">Import Products</button>
                        </div>
                     </form>
                  </div>
                    <table class="table table-bordered table-striped data-table1" style="width: 80%">
                      <thead style="font-size: 11px">
                        <tr>
                          <th>Product image</th>
                          <th>ID.</th>
                          <th>product title</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th data-type="date" data-format="YYYY/MM/DD">created date</th>
                          <th data-type="date" data-format="YYYY/MM/DD">updated date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody style="font-size: 12px">
                        @foreach ($product as $product )
                        <tr>
                          <td><img src="{{asset("storage/$product->image")}}" alt="" style="width:50px;" ></td>
                          <td>{{$product->id}}</td>
                          <td>{{$product->title}}</td>
                          <td>{{$product->description}}</td>
                          <td>{{$product->category}}</td>
                          <td>{{$product->price}}</td>
                          <td>{{$product->quantity}}</td>
                          <td>{{$product->created_at}}</td>
                          <td>{{$product->updated_at}}</td>
                          <td>
                            <a class="btn btn-danger" href="{{url('delete_product',$product->id)}}" onclick="return confirm('Are you sure to delete this')">Delete</a>
                            <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>

                          </td>
                        </tr>
                        @endforeach
            
                      </tbody>
                    </table>
                </div>





            {{-- </div> --}}

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
</main>


</body>

</html>
