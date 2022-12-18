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
            <form action="/posts" method = "POST">
            <p>title</p>
            <input type="text" name="post[title]"/>
            
            
            <p>body</p>
            <textarea name="post[body]"></textarea>
            
            <p><input type="button" value="post" id="btn"></p></form>
            <br>
            <a href="/">戻る</a>  
            
        </body>