<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='record'>Record</h1>
    <br>
    {{ \Carbon\Carbon::now()->format('Y/m/d D') }}
    <h3 class='training_record'>
        <a href='/records/create' class="btn btn-solid-gold register">登録</a>
    </h3>
    @foreach($records as $record)
        <br>
        <div class='box25 record content'>
            <div class='date'>
                <br>
                <h2>{{ $record->date }}</h2>
            </div>
            <div class='weight'>
                @if($record->weight != NULL)
                    <h2>体重:{{ $record->weight }} [kg]</h2>
                @endif
            </div>
            @foreach($trainings as $training)
                @if($record->training_id == $training->id && $training->training_name != NULL)
                        <h2>種目:{{ $training->training_name }}</h2>
                        @if($record->training_weight == 1)
                            <h2>自重</h2>
                            <h2>回数:{{ $record->time }} [回]</h2>
                            <h2>セット数:{{ $record->set }} [set]</h2>
                            <h2>筋トレの点数:{{ $record->point }} [point]</h2>
                            <h2>部位:{{ $record->part_name }}</h2>
                        @endif
                        @if($record->training_weight != 1 && $record->training_weight != NULL)    
                            <h2>重量:{{ $record->training_weight }} [kg]</h2>
                            <h2>回数:{{ $record->time }} [回]</h2>
                            <h2>セット数:{{ $record->set }} [set]</h2>
                            <h2>筋トレの点数:{{ $record->point }} [point]</h2>
                            <h2>部位:{{ $record->part_name }}</h2>
                        @endif
                @endif
            @endforeach 
            @if($record->run_time != NULL)
                <h2>走行時間:{{ $record->run_time }} [h:m:s]</h2>
                <h2>走行距離:{{ $record->run_distance }} [km]</h2>
            @endif
            @if($record->diet != NULL)
                <h2>食事:{{ $record->diet }} [kcal]</h2>
            @endif
            <a href='/records/{{ $record->id }}'>確認</a>
        </div>    
    @endforeach
    <div class='graph'>
        <br>
        <h3>グラフ &#128200;</h3>
        <a href='/records/graphs/weight_graph'>体重</a>
    </div>
    <div class='paginate'>{{ $records->links() }}</div>
</x-app-layout>