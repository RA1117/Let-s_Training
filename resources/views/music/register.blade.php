<x-app-layout>
    <x-slot name="header">
        　Music
    </x-slot>
    <h1>Let's Training</h1>
    <h1>Music Register</h1>
    <div class='register'>
        <h2>曲名: {{ $music->name }}</h2>
        <h2 class='artist'>アーティスト名: {{ $music->artist }}</h2>
        <form action='/music/{{$music->id}}' method='POST' enctype='multipart/form-data'>
            @csrf
            <div class='music_id'>
                <input type='hidden' name='comment[music_id]' value='{{ $music->id }}'>
            </div>
            <div class='user_id'>
                <input type='hidden' name='comment[user_id]' value='{{ $user->id}}'>
            </div>
            <div class='review'>
                <h2>評価(max 5点　＊小数可)</h2>
                <input type='text' name=comment[review] placeholder='評価'>
            </div>
            <div class='body'>
                <h2>クチコミ</h2>
                <textarea name=comment[body] placeholder='クチコミ'>{{ old('comment.body') }}</textarea>
            </div>
            <input type='submit' value='store'>
        </form>
    </div>
    <div class='footer'>
        <a href='/music/{{$music->id}}'>戻る</a>
    </div>
    <style>
        a{
            color: blue;
        }
    </style>
</x-app-layout>
