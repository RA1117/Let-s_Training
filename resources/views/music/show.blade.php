<x-app-layout>
    <x-slot name="header">
        　Music
    </x-slot>
    <h1>Let's Training</h1>
    <h1>Music Evaluation Detail</h1>
    @foreach($comments as $comment)
        @if( $music->id == $comment->music_id )
            <div class=flame07>
                <h2>ユーザ名: {{ $comment->user->name }}</h2>
                <h2>曲名: {{ $music->name }}</h2>
                <h2>アーティスト名: {{ $music->artist }}</h2>
                <h2>評価: {{ $comment->review }}</h2>
                <h2>クチコミ: {{ $comment->body }}</h2>
                <span>
                    @php
                        $g=0;
                    @endphp
                    @foreach($comment_users as $comment_user)
                        @if($comment_user->pivot->comment_id == $comment->id)
                            <form action="{{route('music_unnice', $comment)}}" method="POST">
                                @csrf
                                <input type="submit" value="いいね {{$comment->users()->count()}}"　class="btn btn-success btn-sm">
                            </form>
                            @php
                                $g=1;
                            @endphp
                        @endif
                    @endforeach
                </span>
                @if($g == 0)
                    <form action="{{route('music_nice', $comment)}}" method="POST">
                        @csrf
                        <input type="submit" value="いいね {{$comment->users()->count()}}"　class="btn btn-success btn-sm">
                    </form>    
                @endif
            </div>
        @endif
    @endforeach
    <div class='register'>
        <a href='/music/{{ $music->id }}/register'>登録する</a>
    </div>
    <div class='footer'>
        <a href='/music'>戻る</a>
    </div>
</x-app-layout>
