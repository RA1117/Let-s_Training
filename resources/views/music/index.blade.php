<x-app-layout>
    <x-slot name="header">
        　Music
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1>Music Ranking</h1>
    <div class='musics'>
        @foreach($Music as $music)
            <div class='flame01'>
                <h2>{{ $loop->iteration }}位 曲名: <a href="/music/{{ $music->id }}">{{ $music->name }}</a></h2>
                <p class='artist'>アーティスト名: {{ $music->artist }}</p>
                <p class='average'>評価(平均): {{ $music->average }}</p>
                <p class='good'>いいね数: {{ $music->good }}</p>
            </div>
        @endforeach
    </div>
    <div class='new_create'>
        <h2><a href="/music/create" class="btn btn--orange">新規作成</a>(曲・アーティスト)</h2>
    </div>
</x-app-layout>
