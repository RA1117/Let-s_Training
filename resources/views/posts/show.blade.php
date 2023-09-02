<x-app-layout>
    <x-slot name="header">
        　Blog
    </x-slot>
        {{ $post->updated_at}}
        <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class='content_post'>
                <h3>本文</h3>
                <p class='body'>{{ $post->body }}</p>
                <img src='{{ asset($post->image_path) }}'>
            </div>
        </div>
        <div class='footer'>
            <a href='/'>戻る</a>
        </div>
    </x-app-layout>
</html>
