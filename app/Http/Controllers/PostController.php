<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function get ($id) {
        $post= Post::find($id);
        return view('post',["post"=>$post]);
    }


    public function index()
    {
        $posts = Post::with(["user","likes"])->paginate(3);
           
        return view('posts', [
            'posts' => $posts
        ]);
    }

     public function destroy(Post $post)
     {
         $this->authorize('delete',$post);
        Post::find($post->id)->delete();
        return back();
     }



    public function create(Request $request)
    {
        $this->validate($request,[
            'body'=>"required",
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
