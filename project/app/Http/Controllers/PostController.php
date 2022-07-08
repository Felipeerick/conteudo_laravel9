<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
   protected $user;
   protected $post;
   
   public function __construct(User $user, Post $post)
   {
    $this->user = $user;
    $this-> post= $post;

   }

   public function index()
   {
    
    $posts = Post::all();

    return view('posts.index', compact('posts'));
   }

   public function show($UserId)
   {
      if(! $user = User::find($UserId)){
      return redirect()->back();
      }

      $posts = $user->posts()->get();

      return view('posts.show', compact('posts', 'user'));
   }

}
