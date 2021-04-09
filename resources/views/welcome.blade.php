@extends('layouts/general')

@section('content')
    

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-danger " style="background-image: url(https://blog.adobe.com/hlx_b95b6487d8616bf74867008a8d4c0d3bc01d5ca2.jpg?auto=webp&format=pjpg&optimize=medium&width=1575)">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal text-light bg-primary text-uppercase p-2"> tech tools  store  </h1>
    <p class="lead font-weight-normal text-light">everything you need you find it here , <span class="text-warning">what you are waiting for? buy now !!<span></p>
  
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>


{{--  products --}}
<div class="container my-5">
  <div class="row">

  @foreach ($products as $product)
    
     <div class="col-sm">

          <div class="card my-3 text-center" style="width: 18rem;">
                <img class="card-img-top" src="{{$product->image_url}}" alt="Card image cap">
                     <div class="card-body">
                         <a  href="{{ route('product',$product->id) }}" class="card-title text-primary"><h5>{{$product->title}}</h5></a>
                         <p class="card-text ">{{ number_format($product->price, 2, ',', ' ') . ' DA' }}</p>
                         <a href="#" class="btn btn-dark">add to cart</a>
                      </div>
            </div>
  
      </div>
   @endforeach

 
    
  </div>
</div>
@endsection