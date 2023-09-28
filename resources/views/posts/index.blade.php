<x-app-layout>
    <x-slot name="header">
        　Blog
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='Blog'>Blog</h1>
    <div class="btn-wrap--perspective">
        <a href='/posts/create'>create</a>
    </div>
    <div class='posts'>
        @foreach($posts as $post)
            <div class='box18 post'>
                {{ $post->updated_at}}
                <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>
                <a href='/posts/{{ $post->id }}'><h2 class='title'>{{ $post->title }}</h2></a>
                <p class='body'>{{ $post->body }}</p>
                @if($post->file_path != NULL)
                    <img src='{{ asset($post->file_path) }}'>
                @endif
                <div class='edit'>
                    @if($user->id == $post->user_id)
                    <a href='/posts/{{ $post->id }}/edit'>edit</a>
                    @endif
                </div>
                @if($user->id == $post->user_id)
                    <form action='/posts/{{ $post->id }}' id='form_{{ $post->id }}' method='post'>
                        @csrf
                        @method('DELETE')
                        <button id='delete' type='button' onclick='deletePost({{ $post->id }})'>delete</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
    <div class='user'>
        <p>ログインユーザー：{{ Auth::user()->name }}</p>
    </div>
    <div class='paginate'>{{ $posts->links('vendor.pagination.tailwind') }}</div>
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
            color: red;
        }
    </style>
</x-app-layout>
