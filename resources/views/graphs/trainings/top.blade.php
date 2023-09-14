<x-app-layout>
    <x-slot name="header">
        　Graph
    </x-slot>
    <h1>Let's Training</h1>
    <h1>Graph</h1>
    <br>
    <h2>種目</h2>
    <div class='record content'>
        @foreach($trainings as $training)
            @if( $training->training_name != NULL )
                <br>
                <a href="/records/graphs/training_graph/{{ $training->id }}">{{ $training->training_name }}</a>
                <br>
            @endif
        @endforeach 
    <br>
    <div class='paginate'>{{ $trainings->links() }}</div>
</x-app-layout>