<x-app-layout>
    <x-slot name="header">
        　Part
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='part_name'>Part Name</h1>
    <br>
    <div class='parts'>
        <ui>
            @foreach($bodies as $body)
                <div class='bodies'>
                    @if($body->body_name == '全身')
                        <li class='run_graph'><a href='/records/graphs/run_graph'>全身</a></li>
                    @else
                        <li class='body_name'><a href='/records/graphs/training_graph/{{ $body->id }}'>{{ $body->body_name }}</a></li>
                    @endif
                </div>
                <br>
            @endforeach
            <li class='diet_graph'><a href='/records/graphs/diet_graph'>食事</a></li>
            <br>
            <li class='weight_graph'><a href='/records/graphs/weight_graph'>体重</a></li>
        </ui>
    </div>
</x-app-layout>
