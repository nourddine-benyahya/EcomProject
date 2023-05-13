<!DOCTYPE html>
<html lang="en">
  <head>



  </head>
  <body>

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

                <div class="div_center">


                    <form action="{{url('add_category')}}" method="POST" >
                        <div class="form-group">
                            @csrf

                          <label for="exampleInputEmail1">Add Category</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category" required placeholder="Enter category">
                          <small id="emailHelp" class="form-text text-muted">make sure the category not exist.</small>
                        </div>
                         
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>

            </div>

        </div>
    <!-- container-scroller -->


    <div class="card card p-5" style="width: 100%">
        <table class="table table-bordered table-striped data-table1" style="min-width: 100%">
          <thead>
            <tr>
              <th>ID.</th>
              <th>Category Name</th>
              <th data-type="date" data-format="YYYY/MM/DD">created date</th>
              <th data-type="date" data-format="YYYY/MM/DD">updated date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $data )
            <tr>
              <td>{{$data->id}}</td>
              <td>{{$data->category_name}}</td>
              <td>{{$data->created_at}}</td>
              <td>{{$data->updated_at}}</td>
              <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
                <a class="btn btn-success" href="{{url('update_category',$data->id)}}">Edit</a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
    </div>

    <!-- plugins:js -->

   

@include('admin.script')


</main>


</body>

</html>

