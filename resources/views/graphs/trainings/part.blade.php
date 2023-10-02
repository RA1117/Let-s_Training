<x-app-layout>
    <x-slot name="header">
        　Part Graph
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class=graph_title>{{ $part->part_name}}の推移</h1>
    <h1 class='part_name'>Part Name</h1>
    <h1 class=body_name>{{ $part->part_name}}</h1>
    <div class='graph_style'>
   		<canvas id="myChart"></canvas>
   	</div>
    <div class='record_content'>
        <br>
        <a href='/parts/{{ $part->id }}'>{{ $part->part_name }}</a>
        <br>
        <br>
        <div class='footer'>
            <a href='/records/graphs/training_graph/{{ $body->id }}'><h2>戻る</h2></a>
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <script>
	//ラベル
	var labels = [
		@foreach($records as $index => $record)
			@if($index == 0)
				@php
	        		$a = $record->date;
	        	@endphp
	        @endif
			@if($a != $record->date)
	        	'{{ $records[$index-1]->date }}',
	        	@php
	        		$a = $record->date;
	        	@endphp
	        @endif
	        @if($records[$i] == $record)
	        	'{{ $record->date }}',
	        @endif
        @endforeach
	];
	//ポイントログ
	var part_log = [
		@foreach($records as $index => $record)
			@if($index == 0)
				@php
	        		$a = $record->date;
	        	@endphp
	        @endif
			@if($a != $record->date)
	        	{{ $point }},
	        	@php
	        		$a = $record->date;
	        		$point = $record->point;
	        	@endphp
	        @else
	        	@php
	        		$point += $record->point;
	        	@endphp
	        @endif
        	@if($records[$i] == $record)
        		{{ $point }},
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
							label: '{{$part->part_name}}の点数[point]',
							data: part_log,
							@if($part->part_name == '大胸筋上部')
								borderColor: "rgba(0,0,255,1)",
							@elseif($part->part_name == '大胸筋中部')
								borderColor: "rgba(0,255,0,1)",
							@elseif($part->part_name == '大胸筋下部')
								borderColor: "rgba(255,0,0,1)",
							@elseif($part->part_name == '大胸筋全体')
								borderColor: "rgba(0,255,255,1)",
							@elseif($part->part_name == '広背筋')
								borderColor: "rgba(255,255,0,1)",
							@elseif($part->part_name == '僧帽筋')
							borderColor: "rgba(255,0,255,1)",
							@elseif($part->part_name == '三角筋前部')
							borderColor: "rgba(138,43,226,1)",
							@elseif($part->part_name == '三角筋中部')
							borderColor: "rgba(255,127,147,1)",
							@elseif($part->part_name == '三角筋後部')
							borderColor: "rgba(128,0,128,1)",
							@elseif($part->part_name == '上腕二頭筋')
								borderColor: "rgba(255,215,0,1)",
							@elseif($part->part_name == '上腕三頭筋')
								borderColor: "rgba(240,230,140,1)",
							@elseif($part->part_name == '前腕筋')
								borderColor: "rgba(173,255,47,1)",
							@elseif($part->part_name == '腹直筋')
								borderColor: "rgba(106,90,205,1)",
							@elseif($part->part_name == '腹斜筋')
								borderColor: "rgba(205,92,92,1)",
							@elseif($part->part_name == '大臀筋')
								borderColor: "rgba(102,205,170,1)",
							@elseif($part->part_name == '大腿四頭筋')
								borderColor: "rgba(127,255,212,1)",
							@elseif($part->part_name == '大腿二頭筋')
								borderColor: "rgba(50,205,50,1)",
							@elseif($part->part_name == '下腿三頭筋')
								borderColor: "rgba(0,255,255,1)",
							@endif
		         			backgroundColor: "rgba(225,225,225,8)"
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