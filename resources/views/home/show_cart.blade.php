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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <style type="text/css">

      .center{
        margin: auto;
        width: 70%;
        text-align: center;
        padding: 30px;
      }

      .th_deg{
        font-size: 30px;
        padding: 5px;
        background: skyblue;
      }
      .img_deg{
        height: 100px;
        width: 100px;
      }
      .totla_deg{
        font-size: 20px;
        padding: 40px;
      }

      </style>
   </head>
   <body>
 



@include('sweetalert::alert')

      <div class="hero_area">
         <!-- header section strats -->
@include('home.header')
         <!-- end header section -->

         @if (session()->has('message'))

         <div class="alert alert-success">

   {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> --}}

             {{session()->get('message')}}

         </div>

         @endif





         <section class="h-100 h-custom" style="background-color: #eee;">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col">
                <div class="card">
                  <div class="card-body p-4">
        
                    <div class="row">
        
                      <div class="col-lg-7">
                        <h5 class="mb-3"><a href="#!" class="text-body"><i
                              class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                        <hr>
        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                          <div>
                            <p class="mb-1">Shopping cart</p>
                            <p class="mb-0">You have 4 items in your cart</p>
                          </div>
                          <div>
                            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                                class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                          </div>
                        </div>
        
                        <?php $totalprice = 0 ; ?>

                        @foreach ($cart as $cart )
                        <div class="card mb-3">
                          <div class="card-body">
                            <div class="d-flex justify-content-between">
                              <div class="d-flex flex-row align-items-center">
                                <div>
                                  <img
                                    src="{{asset("storage/$cart->image")}}"
                                    class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                </div>
                                <div class="ms-3">
                                  <h5>{{$cart->product_title}}</h5>
                                  <p class="small mb-0">category A</p>
                                </div>
                              </div>
                              <div class="d-flex flex-row align-items-center">
                                <div style="width: 50px;">
                                  <h5 class="fw-normal mb-0">{{$cart->quantity}}</h5>
                                </div>
                                <div style="width: 80px;">
                                  <h5 class="mb-0">${{$cart->price}}</h5>
                                </div>
                                <a href="{{url('remove_cart',$cart->id)}}" style="color: #cecece;" onclick="confirmation(event)" ><i class="fas fa-trash-alt">delete</i></a>
                              </div>
                            </div>
                          </div>
                        </div>
        
                        <?php $totalprice = $totalprice + $cart->price ?>

                        @endforeach



                 
        
                 
        
       
        
                      </div>
                      <div class="col-lg-5">
        
                        <div class="card bg-primary text-white rounded-3">
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                              <h5 class="mb-0">Card details</h5>
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                            </div>
        
                           
        
                
                            <hr class="my-4">
        
                            <div class="d-flex justify-content-between">
                              <p class="mb-2">Subtotal</p>
                              <p class="mb-2">${{$totalprice}}</p>
                            </div>
        
                            <div class="d-flex justify-content-between">
                              <p class="mb-2">Shipping</p>
                              <p class="mb-2">$00.00</p>
                            </div>
        
                            <div class="d-flex justify-content-between mb-4">
                              <p class="mb-2">Total(Incl. taxes)</p>
                              <p class="mb-2">${{$totalprice}}</p>
                            </div>
        
                            <button type="button" class="btn btn-info btn-block btn-lg">
                              <div class="d-flex justify-content-between">
                                <a href="{{url('cash_order')}}" style="text-decoration: none;" >
                                <span>${{$totalprice}}</span>
                                <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                              </a> 
                              </div>
                            </button>
        
                          </div>
                        </div>
        
                      </div>
        
                    </div>
        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>











 




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

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
