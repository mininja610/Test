<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
 public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
{
    $post_date = $post->get10(2);
    
   return view ('posts/index',compact('post_date'));
}
 public function show(Post $post)
 {
   return view('posts/show',compact('post'));
 }   
}