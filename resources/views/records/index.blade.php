<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
        <h1>Let's Training</h1>
        <h1>Record</h1>
        {{ \Carbon\Carbon::now()->format('Y/m/d D') }}
            @foreach($records as $record)
                <div class='date'>
                    <h2>{{ $record->date }}</h2>
                </div>
                <div class='record content'>
                    <h2>種目{{ $record->training_name }}</h2>
                </div>
                <br>
            @endforeach
        <h3 class='complite'>
            <a href='/records/{{ $record->id }}'>完了</a>
        </h3>
    </x-app-layout>
</html>