<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="/images/logo.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div style="padding: 0 0 0 100px;" id="navbarSupportedContent">
             <ul class="navbar-nav"  >
                <li class="nav-item active">
                   <a class="nav-link" href="{{url('/')}}"  >Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"  style="width: 150px">
                   <a class="nav-link" href="{{url('products')}}"  style="width: 200px" > All Products</a>
                </li>
                <li class="nav-item" style="width: 200px">
                    <a class="nav-link" href="{{url('show_order')}}" style="width: 200px">My Orders</a>



                 @if (Route::has('login'))

                 @auth
                 <li  class="nav-item" style="margin: 0 0 0 20% ;">
                  <a class="nav-link" href="{{url('show_cart')}}" >
                   <img width="200"  src="/images/card.jpg" alt="#" />
                </a>
               </li>

                 <li class="nav-item">
                    <x-app-layout>

                    </x-app-layout>
                 </li>
               </li>



                 @else

                 <li class="nav-item">
                     <a class="btn btn-outline-success mr-1" href="{{ route('login') }}">login</a>
                  </li>

                    <li class="nav-item" >
                        <a class="btn btn-info" href="{{ route('register') }}" style="width: 150px">Get Started</a>
                    </li>

                    <li  class="nav-item" style="margin: 0 0 0 20% ;">
                     <a class="nav-link" href="{{url('show_cart')}}" >
                      <img width="50"  src="/images/card.jpg" alt="#" />
                   </a>
                  </li>

                    @endauth
                 @endif
                 

                 

             </ul>
          </div>
       </nav>
    </div>
 </header>
