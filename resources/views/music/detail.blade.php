<x-app-layout>
    <x-slot name="header">
        　Music
    </x-slot>
    <h1>Let's Training</h1>
    <h1>Music Evaluation Detail</h1>
    
    @foreach($comment_users as $comment_user)
        <h2>ユーザID: {{ $comment_user->pivot->user_id }}</h2>
        <h2>commentID: {{ $comment_user->pivot->comment_id }}</h2>
    @endforeach
        <h2>ユーザ名: {{ $comment->user->name }}</h2>
        <h2>曲名: {{ $music->name }}</h2>
        <h2>アーティスト名: {{ $music->artist }}</h2>
        <h2>評価: {{ $comment->review }}</h2>
        <h2>クチコミ: {{ $comment->body }}</h2>
        dd
        <h2>いいね({{ $comment->good }})</h2>
    <div class='register'>
        <a href='/music/{{ $music->id }}/register'>登録する</a>
    </div>
    <div class='footer'>
        <a href='/music'>戻る</a>
    </div>
</x-app-layout>
