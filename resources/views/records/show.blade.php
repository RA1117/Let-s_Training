<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
        <h1>Let's Training</h1>
        <h1>Record</h1>
        <div class='record content'>
            <h2>{{ $record->training_name }}{{ $record->training_weight }}</h2>
        </div>
        <br>
        <h1>お疲れ様でした!!!</h1>
        <a href='/records'>戻る</a>
    </x-app-layout>
</html>