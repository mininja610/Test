<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <body>
        <header>
            
            <h3>Blog name</h3>
            <li>
                <ul>Home</ul>
                <ul>About</ul>
                <ul>Main Topic</ul>
                <ul>Main Topic2</ul>
                <ul>blogs</ul>
            </li>
        </header>
        
        <body>
           <form action="/posts" method="POST"> 
           
           @csrf
              
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
                <p style ="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"> {{ $post->body }}</textarea>
                <p style ="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
             <a href="/">戻る</a>  
        </body>