<x-app-layout>
    <x-slot name="header">
        　Create
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='Blog'>Blog Create</h1>
    <form action='/posts/{{ $post->id }}' method='POST' enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <div class='title'>
            <h2>Title</h2>
            <input type='text' name=post[title] placeholder='タイトル' value={{ $post->title }}>
            <p class='title__error' style='color:red'>{{ $errors->first('post.title') }}</p>
        </div>
        <div class='body'>
            <h2>Body</h2>
            <textarea name='post[body]' placeholder='今日も1日お疲れさまでした'>{{ $post->body }}</textarea>
            <p class='title__body' style='color:red'>{{ $errors->first('post.body') }}</p>
        </div>
        <div class='user_id'>
            <input type='hidden' name='post[user_id]' value='{{ $user['id']}}'>
        </div>
        
        <div class='img'>
            <input type='file' name='file' class='form-control'>
        </div>
        
        <input type='submit' value='update'>
    </form>
    <div class='footer'>
        <a href='/posts/{{ $post->id }}'>戻る</a>
    </div>
</x-app-layout>
