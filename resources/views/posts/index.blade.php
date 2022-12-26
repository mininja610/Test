<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <body>
     
            <!--<img class=logo url=>-->
           <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Index
        </h2>
    </x-slot>
            
            <div class=topic>
                
            </div>
      
    
            <div class=wrapper>
                <div class=posts>
                    <a href='posts/create'>投稿する</a>
                    <div class=post>
                        
                     
                       
                            @foreach($post_date as $post)
                            
                            <div class=post></div>
                                <a class=id>{{$post->id}}</a>
                                <a class=title href="posts/{{$post->id}}">{{$post->title}}</a><br>
                               
                                <p class=body>{{$post->body}}</p> 
                                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                                </form>
                                
                       
                            @endforeach
                            <br>
                     <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
                        ログインユーザー：{{ Auth::user()->name }}
                </h2> 
                    </div>
                    {{$post_date->links()}}
                </div>
                
               
             
            </div>
            
       <script>
      
    function deletePost(id) {
      

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
           
       </script>
          
               </x-app-layout>  
        
        
    </body>
    