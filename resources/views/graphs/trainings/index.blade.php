<x-app-layout>
    <x-slot name="header">
        　Diet Graph
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='part_name'>Part Name</h1>
    <br>
    <h1 class=page_title>{{ $body->body_name}}</h1>
    <h1 class=graph_title>{{ $body->body_name}}の推移</h1>
    <div class='graph_style'>
   		<canvas id="myChart"></canvas>
   	</div>
    <div class='record_content'>
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
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <script>
	//ラベル
	var labels = [
		@foreach($records as $record)
            '{{ $record->date }}',
        @endforeach
	];
	//ポイントログ
	var diet_log = [
		@foreach($records as $record)
        	{{ $record->point }},
        @endforeach
	];

	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: labels,
			datasets: [
				@foreach($parts as $part)
						{
							label: '{{$part->part_name}}の点数[point]',
							data: [
								@foreach($records as $record)
									@if($record->part_name == $part->part_name)
										'{{ $record->point }}',
									@endif
						        @endforeach
							],
							@if($part->part_name == '大胸筋上部')
								borderColor: "rgba(0,0,255,1)",
							@elseif($part->part_name == '大胸筋中部')
								borderColor: "rgba(0,255,0,1)",
							@elseif($part->part_name == '大胸筋下部')
								borderColor: "rgba(255,0,0,1)",
							@elseif($part->part_name == '大胸筋全体')
								borderColor: "rgba(0,255,255,1)",
							@elseif($part->part_name == '広背筋')
								borderColor: "rgba(255,0,0,1)",
							@elseif($part->part_name == '僧帽筋')
							borderColor: "rgba(0,255,0,1)",
							@elseif($part->part_name == '三角筋前部')
							borderColor: "rgba(255,0,0,1)",
							@elseif($part->part_name == '三角筋中部')
							borderColor: "rgba(0,255,0,1)",
							@elseif($part->part_name == '三角筋後部')
							borderColor: "rgba(0,0,255,1)",
							@elseif($part->part_name == '上腕二頭筋')
								borderColor: "rgba(255,0,0,1)",
							@elseif($part->part_name == '上腕三頭筋')
								borderColor: "rgba(0,255,0,1)",
							@elseif($part->part_name == '前腕筋')
								borderColor: "rgba(0,0,255,1)",
							@elseif($part->part_name == '腹直筋')
								borderColor: "rgba(255,0,0,1)",
							@elseif($part->part_name == '腹斜筋')
								borderColor: "rgba(0,255,0,1)",
							@elseif($part->part_name == '大臀筋')
								borderColor: "rgba(255,0,0,1)",
							@elseif($part->part_name == '大腿四頭筋')
								borderColor: "rgba(0,255,0,1)",
							@elseif($part->part_name == '大腿二頭筋')
								borderColor: "rgba(0,0,255,1)",
							@elseif($part->part_name == '下腿三頭筋')
								borderColor: "rgba(0,255,255,1)",
							@endif
		         			backgroundColor: "rgba(0,0,0,0)"
						},
				@endforeach
			]
		},
   });
   </script>
   
   <div class='paginate'>{{ $records->links() }}</div>
   <style>
	.record_content{
		position: absolute;
		top: 270px;
        left: 50px;
        line-height: 50px;
	}
   </style>
</x-app-layout>