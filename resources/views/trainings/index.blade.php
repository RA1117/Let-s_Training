<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
    <h1>Let's Training</h1>
    <h1>Record</h1>
    <br>
    <h2>種目</h2>
    <div class='record content'>
        @foreach($trainings as $training)
            <br>
            <a href='/trainings/{{ $training->id }}'>{{ $training->training_name }}</a>
            <br>
        @endforeach 
    <div class='paginate'>{{ $trainings->links() }}</div>
</x-app-layout>