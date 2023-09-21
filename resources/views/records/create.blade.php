<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='record'>Record</h1>
    <form action='/records' method='POST'>
        @csrf
        <div class='user_id'>
            <input type='hidden' name='record[user_id]' value='{{ $user['id']}}'>
        </div>
        <div class='date'>
            <h2>日付</h2>
            <input type='text' name='record[date]' placeholder='日付' value={{ now() }}>
        </div>
        <div class='kind'>
            <h2>種類</h2>
            <select name="record[training_id]">
                <option value="1">--選択してください--</option>
                @foreach($trainings as $training)
                    @if($training->training_name != null)
                        <option value="{{ $training->id }}">{{ $training->training_name }}</option>
                    @endif
                @endforeach
            </select>
            <div class='new_create'>
                <a href='/records/new_create'>新規</a>
            </div>
        </div>
        <br>
        <div class='training_weight'>
            <h2>重量</h2>
            <input type='text' name='record[training_weight]' placeholder='重量[kg]'><h2 class='note'>*自重の場合は1を入力してください</h2>
        </div>
        <div class='time'>
            <h2>回数</h2>
            <input type='text' name='record[time]' placeholder='回数[回]'>
        </div>
        <div class='set'>
            <h2>セット数</h2>
            <input type='text' name='record[set]' placeholder='セット数[セット]'>
        </div>
        <div class='part_name_create'>
            <h2>部位</h2>
            <select name="record[part_name]">
                <option value="null">--選択してください--</option>
                @foreach($parts as $part)
                    <option value="{{ $part->part_name }}">{{ $part->part_name }}</option>
                @endforeach
            </select>
        </div>
        <div class='run_time'>
            <h2>時間(ランニング)</h2>
            <input type='text' name='record[run_time]' placeholder='時間[12030]=(1h/20m/30s)'>
        </div>
        <div class='run_distance'>
            <h2>距離(ランニング)</h2>
            <input type='text' name='record[run_distance]' placeholder='距離[km]'>
        </div>
        <div class='diet'>
            <h2>食事(kcal)</h2>
            <input type='text' name='record[diet]' placeholder='食事[kcal]'>
        </div>
        <div class='weight'>
            <h2>体重</h2>
            <input type='text' name='record[weight]' placeholder='体重[kg]'>
        </div>
        <div class='register'>
            <input id='training_submit' type="submit" value="Training Register">
        </div>
    </form>
    <div class='footer'>
        <a href='/records'>戻る</a>
    </div>
    <style>
        body{
            background-color: white;
        }
        select{
            width: 100%;
            height: 55px;
            margin: 5px 0;
            padding: 8px;
        }
        input{
            width: 280px; 
            height: 55px;
        }
        .date{
            text-align: center;
        }
        .kind{
            width: 280px;
            height: 150px;
            position: absolute;
            left: 270px;
            top: 305px;
        }
        .training_weight{
            position: absolute;
            left: 270px;
            top: 435px;
        }
        .note{
            color: red;
            background-color:yellow;
        }
        .time{
            position: absolute;
            left: 270px;
            top: 550px;
        }
        .set{
            position: absolute;
            left: 270px;
            top: 637px;
        }
        .part_name_create{
            width: 280px;
            height: 120px;
            position: absolute;
            left: 270px;
            top: 724px;
        }
        .run_time{
            position: absolute;
            right: 270px;
            top: 305px;
        }
        .run_distance{
            position: absolute;
            right: 270px;
            top: 435px;
        }
        .diet{
            position: absolute;
            right: 270px;
            top: 550px;
        }
        .weight{
            position: absolute;
            right: 270px;
            top: 637px;
        }
        .footer{
            color: red;
            position: absolute;
            right: 400px;
            top: 740px;
        }
        .register{
            color: red;
            position: absolute;
            right: 570px;
            top: 780px;
        }
        #training_submit{
          display: inline-block;
          padding: 0.3em 1em;
          text-decoration: none;
          color: #FF367F;
          border: solid 2px #FF367F;
          border-radius: 3px;
          transition: .4s;
        }
        #training_submit:hover {
          background: #FF367F;
          color: white;
        }
    </style>
</x-app-layout>
