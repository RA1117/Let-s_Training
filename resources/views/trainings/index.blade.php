<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='training_list'>Training List</h1>
    <div class='search'>
      <form id="form" action="{{ route('training_index') }}" method="GET">
        @csrf
        <input id="sbox" type="text" name="keyword" value="{{ $keyword }}" placeholder="トレーニング名を入力">
        <input id='sbtn' type="submit" value="検索">
        <button>
            <a href="{{ route('training_index') }}" class='can_button'>
                キャンセル
            </a>
        </button>
      </form>
    </div>
    <h2 class=event>種目一覧</h2>
    <div class='record_content'>
        @foreach($trainings as $training)
            <br>
            <div class='training_list_dev'>
                <a href='/trainings/{{ $training->id }}'>{{ $training->training_name }}</a>
            </div>
        @endforeach 
    <div class='paginate'>{{ $trainings->links() }}</div>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .training_list_dev{
            color: blue;
            font-size: 15px;
            text-decoration: underline;
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