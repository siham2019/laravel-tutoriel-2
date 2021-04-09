@extends('layouts.general')


@section('content')
<div class="container">
<div class="bg-light px-4 py-3 mb-5">
       <h5>{{ $post->user->name}}</h5>
       <p>{{ $post["created_at"]->diffForHumans() }}</p>
        <p>{{ $post->body}}</p>
           <div class="d-flex">

                  @can('delete', $post)
                         <form action="{{ route('posts.delete',$post->id) }}" method="post" class="mr-2">
                          @csrf
                          <button type="submit" class="btn btn-danger">delete post</button>
                         </form>
                  @endcan
 
                <p> {{ $post->likes->count() }} like</p>
                        @if ($post->likedBy(auth()->user()->id)) 

                                <form action="{{ route('posts.dislike',$post->id) }}" method="post" >
                                    @csrf
                                  <button type="submit" class="btn btn-dark">dislike</button>
                                </form>

                        @else

                             <form action="{{ route('posts.like',$post->id) }}" method="post" class="mr-2">
                                @csrf
                                  <button type="submit" class="btn btn-danger">like</button>
                             </form>

     
                        @endif
            </div>
        </div>
    </div>


@endsection