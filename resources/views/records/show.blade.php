<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
        <h1>Let's Training</h1>
        <h1>Record</h1>
        @foreach($trainings as $training)
        @if($record->training_id == $training->id)
            <div class='record content'>
                <h2>{{ $training->training_name }}{{ $record->training_weight }}</h2>
            </div>
        @endif
        @endforeach
        <br>
        <h1>お疲れ様でした!!!</h1>
        <a href='/records'>戻る</a>
    </x-app-layout>
</html>