<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='training_list'>Training List</h1>
    <h2 class=event>種目</h2>
    <div class='record content'>
        @foreach($trainings as $training)
            <br>
            <a href='/trainings/{{ $training->id }}'>{{ $training->training_name }}</a>
        @endforeach 
    <div class='paginate'>{{ $trainings->links() }}</div>
</x-app-layout>