@extends('layouts.general')


@section('content')
      <div class="container my-4">
        
        <form class="form-group bg-light p-3" method="post" action="{{ route('posts') }}">
          @csrf
          <textarea class="form-control" rows="3" placeholder="what do you think about it" name="body"></textarea>
          <button type="submit" class="btn btn-primary mt-2">Submit</button>

        </form>

        @foreach ($posts as $post)
            <div class="bg-light px-4 py-3 mb-5">
              <h5>{{ $post->user->name}}</h5>
              <p>{{ $post["created_at"]->diffForHumans() }}</p>
              <p>{{ $post->body}}</p>
              <div class="d-flex">

                @can('delete', $post)
                <form action="{{ route('posts.delete',$post->id) }}" method="post" class="mr-2">
                  @csrf
                   <button type="submit" class="btn btn-danger">حذف المنشور</button>
                 </form>
                @endcan
            {{--    @if ( $post->own(auth()->user()->id) )
                
               @endif --}}
         <p> {{ $post->likes->count() }} like</p>
         @if ($post->likedBy(auth()->user()->id)) 
        
         <form action="{{ route('posts.dislike',$post->id) }}" method="post" >
          @csrf
          <button type="submit" class="btn btn-dark">لم يعجبني</button>
        </form>

        @else

        <form action="{{ route('posts.like',$post->id) }}" method="post" class="mr-2">
          @csrf
         <button type="submit" class="btn btn-danger">اعجبني</button>
       </form>

               
      @endif
              </div>
            </div>
        @endforeach
      <div style="width: 200px;height: 200px;">{{ $posts->links() }}</div>
      </div>
@endsection