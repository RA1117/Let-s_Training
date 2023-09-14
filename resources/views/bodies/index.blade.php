<x-app-layout>
    <x-slot name="header">
        　Part
    </x-slot>
    <h1>Part Name</h1>
    <br>
    <div class='parts'>
        @foreach($bodies as $body)
            <div class='bodies'>
                @if($body->body_name == '全身')
                    <a href='/records/graphs/run_graph'><h2 class='run_graph'>全身</h2></a>
                @else
                    <a href='/bodies/{{ $body->id }}'><h2 class='body_name'>{{ $body->body_name }}</h2></a>
                @endif
            </div>
            <br>
        @endforeach
        <a href='/records/graphs/diet_graph'><h2 class='diet_graph'>食事</h2></a>
        <br>
        <a href='/records/graphs/weight_graph'><h2 class='weight_graph'>体重</h2></a>
    </div>
</x-app-layout>
