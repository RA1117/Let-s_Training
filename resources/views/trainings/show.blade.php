<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='training_list'>Training List</h1>
    <br>
    <div class="embed-responsive embed-responsive-16by9">
        <h1 class='video'>動画: <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $training->video_id }}">{{ $training->training_name }}のフォーム</iframe></h1>
    </div>
    <div class='footer'>
        <br>
        <a href='/trainings'><h2>戻る</h2></a>
    </div>
    <style>
        .video{
            color: black;
            font-size: 15px;
        }
    </style>
</x-app-layout>