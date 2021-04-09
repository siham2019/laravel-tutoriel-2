@extends('layouts.general')


@section('content')
      <div class="container my-4">
        <h1>register </h1>
        <form action="{{ route('register') }}" method="post" class="form">
          @csrf
            
            <input type="email" name="email" placeholder="enter email">
            
            @error('email')
                <div class="alert alert-danger" role="alert">
                  <strong>{{ $message }}</strong>
                </div>
            @enderror
            
             <input type="password" name="password" placeholder="enter password">
              @error('password')
               <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
              @enderror
              <br>
              <input type="password" name="password_confirmation" placeholder="enter confirmed Password">
           
            <input type="text" name="name" placeholder="enter username">

            @error('username')
            <div class="alert alert-danger" role="alert">
                 <strong>{{ $message }}</strong>
             </div>
             @enderror
           
             <button type="submit">
              submit
            </button>
        </form>
      </div>
@endsection