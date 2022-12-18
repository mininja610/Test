<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;



class PostController extends Controller
{
   
 public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
{
    $post_date = $post->get10(5);
    
   return view ('posts/index',compact('post_date'));
}
 public function show(Post $post)
 {
   return view('posts/show',compact('post'));
 }   


    public function create()
 {
   return view('posts/create');
 }   
 public function store(PostRequest $request, Post $post)
 {
 $input = $request['post'];
    $post->fill($input)->save();
    return redirect('posts/' . $post->id);
 }
 public function edit(Post $post){
  
  return view('posts/edit', compact('post'));
 }
 public function update(PostRequest $request, Post $post){
  
  $update = $request['post'];
  $post->fill($update)->save();
   return redirect('posts/' . $post->id);
 }
}