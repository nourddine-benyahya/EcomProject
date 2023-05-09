<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <style type="text/css">

    .center{
        margin: auto;
        width: 70%;
        padding: 30px;
        text-align: center;
    }
    table , th , td{

        border: 1px solid black;
    }
    .th_deg{

        padding: 10px;
        background: skyblue;
        font-size: 20px;
        font-weight: bold;
    }


    </style>
   </head>
   <body>

         <!-- header section strats -->
@include('home.header')
         <!-- end header section -->

         <!--  order section -->


         <section class="h-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-8">
                  <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">
                      <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;">Anna</span>!</h5>
                    </div>
                    <div class="card-body p-4">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                        <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
                      </div>
                      <?php $totalprice = 0 ; ?>                     
                       <?php $totals = 0 ; ?>


                      @foreach ($order as $order )


                      <div class="card shadow-0 border mb-4">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-2">
                              <img src="{{asset("storage/$order->image")}}"
                                class="img-fluid" alt="Phone">
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0">{{$order->product_title}}</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0 small">{{$order->payment_status}}</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0 small">address: {{$order->address}}</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0 small">Qty: {{$order->quantity}}</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0 small">${{$order->price}}</p>
                            </div>
                          </div>
                          <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                          <div class="row d-flex align-items-center">
                            <div class="col-md-2">
                              <p class="text-muted mb-0 small">Track Order</p>
                            </div>
                            <div class="col-md-10">
                                <?php $totals = $totals + $order->price ?>

                              <div class="progress" style="height: 6px; border-radius: 16px;">
                                @if ($order->delivery_status == 'processing')

                                <div class="progress-bar" role="progressbar"
                                  style="width: 10%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              @else
                              <?php $totalprice = $totalprice + $order->price ?>

                              <div class="progress-bar" role="progressbar"
                              style="width: 99%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          @endif

                              <div class="d-flex justify-content-around mb-1">
                                <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      @endforeach


                      <div class="d-flex justify-content-between pt-2">
                        <p class="fw-bold mb-0">Order Details</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> ${{$totals}}</p>
                      </div>
          
                      <div class="d-flex justify-content-between pt-2">
                        <p class="text-muted mb-0">Invoice Number : 788152</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p>
                      </div>
          
                      <div class="d-flex justify-content-between">
                        <p class="text-muted mb-0">Invoice Date : 22 Dec,2019</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p>
                      </div>
          
                      <div class="d-flex justify-content-between mb-5">
                        <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                      </div>
                    </div>
                    <div class="card-footer border-0 px-4 py-5"
                      style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                      <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                        paid: <span class="h2 mb-0 ms-2">${{$totalprice}}</span></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


         <!-- end order section -->


      <!-- jQery -->

      <script>
        function confirmation(ev) {
          ev.preventDefault();
          var urlToRedirect = ev.currentTarget.getAttribute('href');
          console.log(urlToRedirect);
          swal({
              title: "Are you sure to cancel this product",
              text: "You will not be able to revert this!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willCancel) => {
              if (willCancel) {



                  window.location.href = urlToRedirect;

              }

          });


      }
    </script>

      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
