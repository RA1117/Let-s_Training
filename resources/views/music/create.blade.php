<x-app-layout>
    <x-slot name="header">
        　Create
    </x-slot>
    <h1>Music New Register</h1>
    <form action='/music' method='POST' enctype='multipart/form-data'>
        @csrf
        <div class='music_name'>
            <h2>曲名</h2>
            <input type='text' name=music[name] placeholder='曲名' value={{ old('music.name') }}>
        </div>
        <div class='artist'>
            <h2>アーティスト名</h2>
            <input name='music[artist]' placeholder='アーティスト名' value={{ old('music.artist') }}>
        </div>
        <div class='music_id'>
            <input type='hidden' name='comment[music_id]' value='{{ $music }}'>
        </div>
        <div class='user_id'>
            <input type='hidden' name='comment[user_id]' value='{{ $user->id }}'>
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
    <div class='footer'>
        <a href='/music'>戻る</a>
    </div>
    <style>
        a{
            color: blue;
        }
    </style>
</x-app-layout>
