<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
    <h1>Let's Training</h1>
    <h1>Record</h1>
    <div class="embed-responsive embed-responsive-16by9">
      動画: <a href="https://www.youtube.com/watch?v={{ $training->video_id }}">{{ $training->training_name }}のフォーム</a>
    </div>
    <div class='footer'>
        <br>
        <a href='/trainings'><h2>戻る</h2></a>
    </div>
</x-app-layout>