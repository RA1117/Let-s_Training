<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
        <h1>Let's Training</h1>
        <h1>Record</h1>
        <br>
        {{ \Carbon\Carbon::now()->format('Y/m/d D') }}
        <h3 class='training_record'>
            <a href='/records/create'>登録</a>
        </h3>
            @foreach($records as $record)
                <div class='date'>
                    <h2>{{ $record->date }}</h2>
                </div>
                @foreach($trainings as $training)
                @if($record->training_id == $training->id)
                    <div class='record content'>
                        <h2>種目{{ $training->training_name }}</h2>
                    </div>
                @endif
                @endforeach    
                <a href='/records/{{ $record->id }}'>確認</a>
                <br>
            @endforeach
        <div class='paginate'>{{ $records->links() }}</div>
    </x-app-layout>
</html>