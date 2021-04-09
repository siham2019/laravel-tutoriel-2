<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Mail\likePost;
class LikeController extends Controller
{
    function like(Post $post)
    {

        Mail::to($post->user)->send(new likePost(auth()->user(),$post));

        $post->likes()->create(["user_id"=>auth()->user()->id]);
          
        return back();
    }
    function dislike(Post $post)
    {

         $post->likes()->where('user_id',auth()->user()->id)->delete();
        return back(); 
    }
}
