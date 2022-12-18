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
            <h1>Blog name</h1>
            
            <div class=topic>
                
            </div>
        </header>
      
            
            <div class=wrapper>
                <div class=posts>
                    <div class=post>
                        
                         <h2>{{ $post->title }}</h2> <br>
                        <a>sentence</a>
                        <div class=post_date>
                            <p>{{ $post->body }}</p> 
                           
                            
                            <div class=post></div>
                               
                        </div>
                        <a href="/">戻る</a>  
                        <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
                    </div>
               
                </div>
                
                
                
                
            </div>
            
       
        
        
        
    </body>