@extends('layouts/general')

@section('content')
  <div class="container my-5">
    <div class="row">
        <div class="col-5">
          <img class="card-img-top" src="{{$product->image_url}}" alt="Card image cap">

        </div>
        <div class="col-7">
            <div class="card w-100">
                <div class="card-body">
                  <h3 class="card-title">{{$product->title}}</h3>
                  <p>{{ number_format($product->price, 2, ',', ' ') . ' DA' }}</p>
                  <p class="text-uppercase"><b>{{ $product->stock>0? "in stock":"out stock" }}</b></p>
                  <a href="#" class="btn btn-danger">add to cart</a>
                  <hr>
                  <p class="card-text text-justify">{{$product->description}}</p>
               
                </div>
              </div>
        </div>
    </div>
  </div>

@endsection