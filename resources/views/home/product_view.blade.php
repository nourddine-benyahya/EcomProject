<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          {{-- <h2>
             Our <span>products</span>
          </h2>

          <br><br> --}}

          <div>


               <form action="{{url('search_product')}}" method="GET" class="form-inline " style="width: 800px ;text-align: center; align-items: center;">
                  @csrf

                 <input  name="search" class="form-control mr-sm-2 rounded-2xl " type="search" placeholder="Search" placeholder="category or price or product name" style="width: 600px ; margin: auto;" aria-label="Search">
                 <button class="btn btn-outline-success my-0  my-sm-0" style=" text-align: center; align-items: center;"  type="submit">Search</button>
               </form>


  
          </div>
       </div>

       @if (session()->has('message'))

       <div class="alert alert-success">

 {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> --}}

           {{session()->get('message')}}

       </div>

       @endif
       <div class="container d-flex justify-content-center mt-50 mb-50" style="margin: 5% 0" >
            
         <div class="row">
            <div class="col-md-10">
             @foreach ($product as $products )
                 <div class="card card-body" style="margin: 3% 0 0 0 ; width: 900px">
                             <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                 <div class="mr-2 mb-3 mb-lg-0">
                                     
                                         <img src="{{asset("storage/$products->image")}}" style="width:150px; height:150px;" alt="">
                                    
                                 </div>
 
                                 <div class="media-body">
                                     <h6 class="media-title font-weight-semibold">
                                         <a href="{{url('product_details',$products->id)}}" data-abc="true" class="text-primary" >{{$products->title}}</a>
                                     </h6>
 
                                     <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                         <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">category</a></li>
                                         <li class="list-inline-item .text-info " ><a href="#" class="text-muted text-primary" data-abc="true"  >{{$products->category}}</a></li>
                                     </ul>
 
                                     <p class="mb-3">{{$products->description}} </p>
 
                                     <ul class="list-inline list-inline-dotted mb-0">
                                         <li class="list-inline-item">quantity <a href="{{url('product_details',$products->id)}}" data-abc="true" class="text-info" >{{$products->quantity}}</a> pice </li>
                                         
                                         <li class="list-inline-item">Add to <a href="{{ url('add_cart', $products->id) }}" data-abc="true" class="text-primary">wishlist</a></li>
                                     </ul>
                                 </div>
 
                                 <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                     <h3 class="mb-0 font-weight-semibold">${{$products->price}}</h3>
 
                                     <div>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
 
                                     </div>
 
                                     <div class="text-muted">1985 reviews</div>
 
                                     <form action="{{url('add_cart',$products->id)}}" method="POST">
                                         @csrf
                                         <input type="number" name="quantity" value="1" min="1" style="display: none" >
                                    <button type="submit" class="btn btn-warning mt-4 text-white bg-orange-400"><i class="icon-cart-add mr-2"></i>Add to cart </button>
                                 </form>
                                 </div>
                             </div>
                         </div>
 
 
                         @endforeach
 
                     
 
 
 
 
  
 
 
 
 
 
        
                         
 
 
                              
         </div>                     
         </div>


 </section>
