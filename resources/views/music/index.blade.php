<x-app-layout>
    <x-slot name="header">
        　Music
    </x-slot>
    <div class='music_back'>
        <div class="shading">
            <h1 class='training'>Let's Training</h1>
            <h1 class='music'>Music Ranking</h1>
            <div class='music_search'>
                <form id="form" action="{{ route('music_index') }}" method="GET">
                    @csrf
                    <input id="sbox" type="text" name="keyword" value="{{ $keyword }}" placeholder="曲名・アーティスト名">
                    <input id='sbtn' type="submit" value="検索">
                    <button>
                        <a href="{{ route('music_index') }}" class='can_button'>
                            キャンセル
                        </a>
                    </button>
                </form>
            </div>
            <div class='music_content'>
                <ol class="Rankstyle-svg">
                @foreach($Music as $music)
                    <div class='flame01'>
                        <li>{{ $loop->iteration }}位 曲名: <a href="/music/{{ $music->id }}">{{ $music->name }}</a></li>
                        <p class='artist'>アーティスト名: {{ $music->artist }}</p>
                        <p class='average'>評価(平均): {{ $music->average }}</p>
                        <p class='good'>&#128077;いいね数(総数): {{ $music->good }}</p>
                    </div>
                @endforeach
                </ol>
            </div>
            <div class='new_create'>
                <h2><a href="/music/create" class="btn btn--orange">新規作成</a>(曲・アーティスト)</h2>
            </div>
            <div class='paginate'>{{ $Music->links('vendor.pagination.tailwind') }}</div>
        </div>
    </div>
    <style>
        .music_back{
            /*height: 500px;*/
            /*background-color:red;*/
            background-image: url({{ url::asset('images/music.png'); }});
            background-size:cover;
            /*width:100%;
            height:100%;
            background-repeat: no-repeat;*/
        }
        .shading{
            background-color: rgba(255, 255, 255, 0.40);
        }
        #form{
            position:relative;
            max-width:370px;	
            margin-bottom:20px;
        }
        #sbox{
            height:50px;
            width: 270px;
            padding:0 10px; 
            border-radius:25px;
            outline:0;
            background:#eee;
        }
        #sbtn{
            height:50px;
            width:50px;	
            background:#7fbfff;
            color:#fff;
            border:none;
            border-radius:0 25px 25px 0;
        }
        #sbtn:hover{
            color:#888;
        }
    </style>
</x-app-layout>
