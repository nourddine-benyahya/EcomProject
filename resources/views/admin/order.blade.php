<!DOCTYPE html>
<html lang="en">
  <head>


   <style>
   .title_deg{
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    padding-bottom: 40px;
   }
   .table_deg{
    border: 2px solid white;
    width: 100%;
    margin: auto;
    text-align: center;
   }
   .th_deg{
    background: skyblue;

   }
   .img_size{
    width: 50px;
    height: 50px;
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

                <h1 class="title_deg">All orders</h1>

                <div style="text-align: center; padding-bottom:30px;">

                </div>

      



                <table class="table table-bordered table-striped data-table1" style="min-width: 100%">
                    <thead style="font-size: 10px" >
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Delivery Status</th>
                        <th>Print PDF</th>
                        <th>Send Email</th>
                      </tr>
                    </thead>
                    <tbody style="font-size: 11px">
                    @foreach($order as $order )
                       
                    <tr>
                        <td>
                            <img class="img_size"  src="{{asset("storage/$order->image")}}" alt="" >
                        </td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>

                        <td>
                            @if($order->delivery_status == 'processing')

                            <a href="{{url('delivered',$order->id)}}" class="btn btn-primary"  style="font-size: 11px ; padding:5% 10%" onclick="return confirm('Are you sure this product is delivered !!!')">processing</a>

                            @else

                            <p style="color: green; font-size: 11px"  >Deliverd</p>

                            @endif

                        </td>

                        <td>

                            <a href="{{url('print_pdf',$order->id)}}}" class="btn btn-secondary" style="font-size: 11px ; padding:5% 10%" >Print PDF</a>
                        </td>

                        <td>
                            <a href="{{url('send_email',$order->id)}}" class="btn btn-info" style="font-size: 11px ; padding:5% 10%">Send Email</a>
                        </td>
                    </tr>

                    @endforeach
          
                    </tbody>
                  </table>

            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
</main>


</body>

</html>
