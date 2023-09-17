<x-app-layout>
    <x-slot name="header">
        　Body
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='part_name'>Part Name</h1>
    <br>
    <h1>{{ $body->body_name}}</h1>
    <br>
    <h2>種目</h2>
    <div class='record content'>
        @foreach($parts as $part)
            @if( $body->id == $part->body_id )
                <br>
                <a href='/parts/{{ $part->id }}'>{{ $part->part_name }}</a>
                <br>
            @endif
        @endforeach
        <br>
        <div class='footer'>
            <a href='/bodies'><h2>戻る</h2></a>
        </div>
    </div>
</x-app-layout>