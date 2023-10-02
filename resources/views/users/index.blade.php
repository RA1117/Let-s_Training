<x-app-layout>
    <x-slot name="header">
        　Blog
    </x-slot>
    <div class="post_back">
        <div class="shading">
            <h1 class='training'>Let's Training</h1>
            <h1 class='Blog'>Blog</h1>
            <a href='/posts/create' id='create'>create</a>
            <div class='posts'>
                @foreach($posts as $post)
                    <div class='box18 post'>
                        @if($User->id == $post->user_id)
                            <form action='/posts/{{ $post->id }}' id='form_{{ $post->id }}' method='post'>
                                @csrf
                                @method('DELETE')
                                <button id='delete' type='button' onclick='deletePost({{ $post->id }})'>delete</button>
                            </form>
                        @endif
                        <div class='edit'>
                            @if($User->id == $post->user_id)
                            <a href='/posts/{{ $post->id }}/edit' class='edit'>edit</a>
                            @endif
                        </div>
                        {{ $post->updated_at}}
                        {{ $post->user->name }}
                        <a href='/posts/{{ $post->id }}'><h2 class='title'>{{ $post->title }}</h2></a>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                @endforeach
                <div class='footer'>
                <a href='/'>戻る</a>
                </div>
            </div>
            <div class='paginate'>{{ $posts->links() }}</div>
        </div>
    </div>
    <script>
        function deletePost(id) {
            'use strict'
            
            if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
    <style>
        #delete{
            float:right;
            color:white;
            background-color: red;
            padding: 0.15em 0.4em;
            margin-left: 0.8rem;
        }
        #delete:hover{
            background: black;
            color: white;
        }
        #create{
            text-decoration-line: none; 
            color:white;
            background-color: blue;
            padding: 0.3em 0.5em;
        }
        #create:hover{
            background: black;
            color: white;
        }
        .edit{
            text-decoration-line: none; 
            float:right;
            color:white;
            background-color: teal;
            padding: 0.2em 0.5em;
        }
        .edit:hover{
            background: black;
            color: white;
        }
        .post_back{
            background-image: url({{ url::asset('images/board.jpg'); }});
            background-size:cover;
        }
        .shading{
            background-color: rgba(255, 255, 255, 0.50);
        }
        .edit-place{
        }
        .edit{
            text-decoration-line: none; 
            float:right;
            color:white;
            background-color: teal;
            padding: 0.2em 0.5em;
        }
        .edit:hover{
            background: black;
            color: white;
        }
    </style>
</x-app-layout>
