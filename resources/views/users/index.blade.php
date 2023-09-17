<x-app-layout>
    <x-slot name="header">
        　Blog
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='Blog'>Blog</h1>
    <a href='/posts/create'>create</a>
    <div class='posts'>
        @foreach($posts as $post)
            <div class='box18 post'>
                    {{ $post->updated_at}}
                    <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>
                    <a href='/posts/{{ $post->id }}'><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                <form action='/posts/{{ $post->id }}' id='form_{{ $post->id }}' method='post'>
                    @csrf
                    @method('DELETE')
                    <button type='button' onclick='deletePost({{ $post->id }})'>delete</button>
                </form>
            </div>
        @endforeach
        <div class='footer'>
        <a href='/'>戻る</a>
        </div>
    </div>
    <div class='paginate'>{{ $posts->links() }}</div>
    <script>
        function deletePost(id) {
            'use strict'
            
            if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>
