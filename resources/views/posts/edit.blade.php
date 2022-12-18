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
        
      
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
                 <p style ="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
                 <p style ="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>