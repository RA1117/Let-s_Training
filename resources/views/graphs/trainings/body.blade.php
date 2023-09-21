<x-app-layout>
    <x-slot name="header">
        　Diet Graph
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class=graph_title>{{ $body->body_name}}の推移</h1>
    <h1 class='part_name'>Part Name</h1>
    <h1 class=body_name>{{ $body->body_name}}</h1>
    <div class='graph_style'>
   		<canvas id="myChart"></canvas>
   	</div>
    <div class='record_content'>
        @foreach($parts as $part)
            @if( $body->id == $part->body_id )
                <br>
                <a href='/records/graphs/training_graph/{{$body->id}}/{{$part->id}}'>{{ $part->part_name }}</a>
                <br>
            @endif
        @endforeach
        <br>
        <div class='footer'>
            <a href='/bodies'><h2>戻る</h2></a>
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <script>
	//ラベル
	var labels = [
		@foreach($records as $record)
			@if($a != $record->date)
	        	'{{ $record->date }}',
	        	@php
	        		$a = $record->date;
	        	@endphp
	        @elseif($records[$i] == $record)
	        	'{{ $record->date }}',
	        @endif
        @endforeach
	];
	//ポイントログ
	var body_log = [
		@foreach($records as $record)
			@if($a != $record->date)
	        	{{ $point }},
	        	@php
	        		$a = $record->date;
	        	@endphp
	        @else
	        	@php
	        		$point += $record->point;
	        	@endphp
	        	@if($records[$i] == $record)
	        		{{ $point }},
	        	@endif
	        @endif
        @endforeach
	];
	
	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: labels,
			datasets: [
						{
							label: '{{$body->body_name}}の点数[point]',
							data: body_log,
							@if($body->body_name == '胸')
								borderColor: "rgba(0,0,255,1)",
							@elseif($body->body_name == '腕')
								borderColor: "rgba(0,255,0,1)",
							@elseif($body->body_name == '肩')
								borderColor: "rgba(255,0,0,1)",
							@elseif($body->body_name == '背中')
								borderColor: "rgba(0,255,255,1)",
							@elseif($body->body_name == 'お腹')
								borderColor: "rgba(255,255,0,1)",
							@elseif($body->body_name == '脚')
							borderColor: "rgba(255,0,255,1)",
							@endif
		         			backgroundColor: "rgba(0,0,0,0)"
						},
			]
		},
   });
   </script>
   
   <div class='paginate'>{{ $records->links() }}</div>
   <style>
   .part_name{
   		position: absolute;
		top: 190px;
   }
   .body_name{
   		position: absolute;
		top: 240px;
		left: 50px;
		font-size: 30px;
   }
	.record_content{
		position: absolute;
		top: 270px;
        left: 50px;
        line-height: 50px;
	}
   </style>
</x-app-layout>