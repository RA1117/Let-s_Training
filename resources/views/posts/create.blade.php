<x-app-layout>
    <x-slot name="header">
        　Create
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='Blog'>Blog Create</h1>
    <form action='/posts' method='POST' enctype='multipart/form-data'>
        @csrf
        <div class='title'>
            <h2>Title</h2>
            <input type='text' name=post[title] placeholder='タイトル' value={{ old('post.title') }}>
            <p class='title__error' style='color:red'>{{ $errors->first('post.title') }}</p>
        </div>
        <div class='body'>
            <h2>Body</h2>
            <textarea name='post[body]' placeholder='内容'>{{ old('post.body') }}</textarea>
            <p class='title__body' style='color:red'>{{ $errors->first('post.body') }}</p>
        </div>
        <div class='user_id'>
            <input type='hidden' name='post[user_id]' value='{{ $user['id']}}'>
        </div>
        
        <div class='img'>
            <input type='file' name='file' class='form-control'>
        </div>
        
        <input type='submit' value='store' class='submit'>
    </form>
    <div class='footer'>
        <a href='/'>戻る</a>
    </div>
    <style>
        .submit{
            color:white;
            background-color: orange;
            padding: 0em 0.4em;
            border-radius: 100vh;
        }
        .submit:hover{
            background: black;
            color: white;
        }
    </style>
</x-app-layout>
