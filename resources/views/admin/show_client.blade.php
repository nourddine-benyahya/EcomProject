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

                <h1 class="font_size">Clients</h1>

                <div class="card card p-5" style="width: 100%">
                    
                    <div style="display: flex;" >                  
                  </div>
                    <table class="table table-bordered table-striped data-table1" style="width: 80%">
                      <thead style="font-size: 15px">
                        <tr>
                          <th>ID.</th>
                          <th>name</th>
                          <th>email</th>
                          <th>phone</th>
                          <th>address</th>
                          <th data-type="date" data-format="YYYY/MM/DD">email verified at</th>
                          <th colspan="2" >Action</th>
                        </tr>
                      </thead>
                      <tbody style="font-size: 12px">
                        @foreach ($clients as $client )
                        <tr>
                          <td>{{$client->id}}</td>
                          <td>{{$client->name}}</td>
                          <td>{{$client->email}}</td>
                          <td>{{$client->phone}}</td>
                          <td>{{$client->address}}</td>
                          <td>{{$client->email_verified_at}}</td>
                          
                          <td>
                            <a class="btn btn-danger" href="{{url('delete_user',$client->id)}}" onclick="return confirm('Are you sure to delete this')">Delete</a>
                            <a class="btn btn-success" href="{{url('update_client',$client->id)}}">Edit</a>
                        </td>
<td>
    <a href="{{url('send_email2',$client->id)}}" class="btn btn-info" style="font-size: 11px">Send Email</a>

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
