<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
 public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
{
    $post_date = $post::all();
    
   return view ('posts/index',compact('post_date'));
}}