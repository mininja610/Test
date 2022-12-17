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
            <!--<img class=logo url=>-->
            <h1>Blog Name</h1>
            
            <div class=topic>
                
            </div>
        </header>
      
            
            <div class=wrapper>
                <div class=posts>
                    <div class=post>
                        
                        <h2>Article</h2>
                        <a>sentence</a>
                        <div class=post_date>
                            @foreach($post_date as $post)
                            
                            <div class=post></div>
                                <a class=id>{{$post->id}}</a>
                                <a class=title href="posts/{{$post->id}}">{{$post->title}}</a>
                                <p class=body>{{$post->body}}</p>
                        </div>
                            @endforeach
                            
                    </div>
                    {{ $post_date->links() }}
                </div>
                
                
                
                
            </div>
            
       
        
        
        
    </body>