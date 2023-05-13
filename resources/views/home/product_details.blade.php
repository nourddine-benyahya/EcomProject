<!DOCTYPE html>
<html>
   <head>
    {{-- <base href="/public"> --}}
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/logo.png" type="">
      <title>EcomProject</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
      <style>
         body {
    font-family: 'Roboto Condensed', sans-serif;
}

.hedding {
    font-size: 20px;
    color: #ab8181`;
}

.main-section {
    position: absolute;
    left: 50%;
    right: 50%;
    transform: translate(-50%, 5%);
}

.left-side-product-box img {
    width: 100%;
}

.left-side-product-box .sub-img img {
    margin-top: 5px;
    width: 83px;
    height: 100px;
}

.right-side-pro-detail span {
    font-size: 15px;
}

.right-side-pro-detail p {
    font-size: 25px;
    color: #a1a1a1;
}

.right-side-pro-detail .price-pro {
    color: #E45641;
}

.right-side-pro-detail .tag-section {
    font-size: 18px;
    color: #5D4C46;
}

.pro-box-section .pro-box img {
    width: 100%;
    height: 200px;
}

@media (min-width:360px) and (max-width:640px) {
    .pro-box-section .pro-box img {
        height: auto;
    }
}
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
@include('home.header')



<div class="container">
   <div class="col-lg-8 border p-3 main-section bg-white">
       <div class="row hedding m-0 pl-3 pt-0 pb-3">
           Product Detail Design Using Bootstrap 4.0
       </div>
       <div class="row m-0">
           <div class="col-lg-4 left-side-product-box pb-3">
               <img src="{{asset("storage/$product->image")}}" style="width:400px ; height:400px" class="border p-3">

           </div>
           <div class="col-lg-8 rounded-7">
               <div class="right-side-pro-detail border p-3 m-0">
                   <div class="row">
                       <div class="col-lg-12">
                           <span>shop now</span>
                           <p class="m-0 p-0">{{$product->title}}</p>
                       </div>
                       <div class="col-lg-12">
                           <p class="m-0 p-0 price-pro">${{$product->price}}</p>
                           <hr class="p-0 m-0">
                       </div>
                       <div class="col-lg-12 pt-2">
                           <h5>Product Detail</h5>
                           <span>{{$product->description}}.</span>
                           <hr class="m-0 pt-2 mt-2">
                       </div>
                       <div class="col-lg-12">
                           <p class="tag-section"><strong>category : </strong><a href="">{{$product->category}}</a></p>
                       </div>
                       <div class="col-lg-12">
                           <h6>Quantity :</h6>
                           <form action="{{url('add_cart',$product->id)}}" method="POST">
                              @csrf
                           <input type="number" name="quantity" class="form-control text-center w-100" value="1">
                       </div>
                       <div class="col-lg-12 mt-3">
                           <div class="row">
                               <div class="col-lg-6 pb-2">
                                   <button type="submit"  class="btn btn-danger w-100" style="color:black">Add To Cart</button>
                               </div>
                               <div class="col-lg-6">
                                   <button type="submit"  class="btn btn-success w-100" style="color:black">Shop Now</button>
                               </div>
                           </div>
                        </form>
                       </div>
                   </div>
               </div>
           </div>
       </div> 
   </div>
</div>





      <!-- footer end -->
      
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

