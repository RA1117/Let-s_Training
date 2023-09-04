<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
    <h1>Let's Training</h1>
    <h1>Record</h1>
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
                @foreach($trainings as $training)
                    <option value="{{ $training->id }}">{{ $training->training_name }}</option>
                @endforeach
            </select>
        </div>
        <div class='new_create'>
            <a href='/records/new_create'>新規</a>
        </div>
        <br>
        <div class='training_weight'>
            <h2>重量</h2>
            <input type='text' name='record[training_weight]' placeholder='重量[kg]'><h2>*自重の場合は1を入力してください</h2>
        </div>
        <div class='time'>
            <h2>回数</h2>
            <input type='text' name='record[time]' placeholder='回数[回]'>
        </div>
        <div class='set'>
            <h2>セット数</h2>
            <input type='text' name='record[set]' placeholder='セット数[セット]'>
        </div>
        <div class='part_name'>
            <h2>部位</h2>
            <input type='text' name='record[part_name]' placeholder='部位'>
        </div>
        <div class='weight'>
            <h2>体重</h2>
            <input type='text' name='record[weight]' placeholder='体重[kg]'>
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
        <input type='submit' value='store'/>
    </form>
    <div class='footer'>
        <a href='/records'>戻る</a>
    </div>
</x-app-layout>