<x-app-layout>
    <x-slot name="header">
        　Blog
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='Blog'>Blog</h1>
    {{ $post->updated_at}}
    <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>
    <h1 class='title'>
        {{ $post->title }}
    </h1>
    <div class='content'>
        <div class='content_post'>
            <h3>本文</h3>
            <p class='body'>{{ $post->body }}</p>
            @if($post->file_path != NULL)
                <img src='{{ asset($post->file_path) }}'>
            @endif
        </div>
    </div>
    <div class='footer'>
        <a href='/'>戻る</a>
    </div>
</x-app-layout>
