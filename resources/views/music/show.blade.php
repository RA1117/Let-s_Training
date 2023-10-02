<x-app-layout>
    <x-slot name="header">
        　Music
    </x-slot>
    <div class='back'>
        <h1 class='training'>Let's Training</h1>
        <h1 class='music'>Music Evaluation</h1>
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
                                <form style="display:inline-block" action="{{route('music_unnice', $comment)}}" method="POST" >
                                    @csrf
                                    <img src="{{asset('images/good.png')}}" width="25px">
                                    <input class="green" type="submit" value="いいね {{$comment->good}}">
                                </form>
                                @php
                                    $g=1;
                                @endphp
                            @endif
                        @endforeach
                    </span>
                    @if($g == 0)
                        <form style="display:inline-block" action="{{route('music_nice', $comment)}}" method="POST">
                            @csrf
                            <img src="{{asset('images/good.png')}}" width="25px">
                            <input class="gray" type="submit" value="いいね {{$comment->good}}">
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
    </div>
    <style>
        .back{
            /*height: 500px;*/
            background-image:"url('board.jpg')";
            background-size:cover;
            width:100%;
            height:100%;
            background-repeat: no-repeat;
        }
        .gray{
            width: 60px;
            font-size: 15px;
            color: #fff;
            display: inline-block;
            padding: 3px 0px;
            text-align: center;
            background-color: Gray;
            border: 1px solid Gray;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 1s;
        }
            
            /*--hover--*/
        .gray:hover {
            color: #5c87a6;
            background-color: #ffffff;
            border: 1px solid Gray;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 1s;
        }
        .green{
            width: 60px;
            font-size: 15px;
            color: #fff;
            display: inline-block;
            padding: 3px 0px;
            text-align: center;
            background-color: MediumSeaGreen;
            border: 1px solid MediumSeaGreen;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 1s;
        }
            
            /*--hover--*/
        .green:hover {
            color: #5c87a6;
            background-color: #ffffff;
            border: 1px solid MediumSeaGreen;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 1s;
        }       
    </style>
</x-app-layout>
