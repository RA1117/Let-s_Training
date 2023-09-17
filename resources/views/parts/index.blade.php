<x-app-layout>
    <x-slot name="header">
        　Part
    </x-slot>
    <h1>Let's Training</h1>
    <h1>Parts</h1>
    <p class='part_name'>{{ $part->part_name }}</p>
    <br>
    <h2>種目</h2>
    <div class='record content'>
        @foreach($part->trainings as $training)
            <a href='/trainings/{{ $training->id }}'>{{ $training->training_name }}</a>
            <br>
        @endforeach
        <br>
    </div>
    @foreach($bodies as $body)
        @if($body->id == $part->body_id)
            <div class='footer'>
                <br>
                <a href='/bodies/{{ $body->id }}'><h2>戻る</h2></a>
            </div>
        @endif
    @endforeach
</x-app-layout>
