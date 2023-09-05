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
            <h2>{{ $training->training_name }}</h2>
        @endforeach 
    <br>
    <div class='paginate'>{{ $trainings->links() }}</div>
</x-app-layout>