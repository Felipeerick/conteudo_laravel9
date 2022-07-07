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

  /*  public function index($userid)
   {
    if($users = $this->user->find($userid)){
       return redirect()->back();        
    };
    
    $post = $users->posts()->get();

    return view('posts.index', compact('users', 'post'));
   } */

}
