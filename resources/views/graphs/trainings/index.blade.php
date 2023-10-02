<x-app-layout>
    <x-slot name="header">
        　Body Graph
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class=graph_title>Bodyごとの推移</h1>
    <h1 class='part_name'>Part Name</h1>
    <br>
    <div class='parts'>
        <ui>
            @foreach($bodies as $body)
                <div class='bodies'>
                    @if($body->body_name == '全身')
                        <li class='run_graph'><a href='/records/graphs/run_graph'>全身</a></li>
                    @else
                        <li class='body_name_list'><a href='/records/graphs/training_graph/{{ $body->id }}'>{{ $body->body_name }}</a>
                    @endif
                </div>
                <br>
            @endforeach
            <li class='diet_graph'><a href='/records/graphs/diet_graph'>食事</a></li>
            <br>
            <li class='weight_graph'><a href='/records/graphs/weight_graph'>体重</a></li>
        </ui>
    </div>
    <div class='graph_style'>
   		<canvas id="myChart"></canvas>
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
	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			@foreach($bodies as $body)
				@if($body->id != 7)
					labels:[
						@php
							$Records = $records->where('body_id', $body["id"]);
						@endphp
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
				    ],
					datasets: [
								{
									label: '{{$body->body_name}}の点数',
									data: [
										@foreach($Records as $index => $record)
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
									],
									@if($body->id == 1)
										borderColor: "rgba(0,0,255,1)",
									@elseif($body->id == 2)
										borderColor: "rgba(0,255,0,1)",
									@elseif($body->id == 3)
										borderColor: "rgba(255,0,0,1)",
									@elseif($body->id == 4)
										borderColor: "rgba(0,255,255,1)",
									@elseif($body->id == 5)
										borderColor: "rgba(255,255,0,1)",
									@elseif($body->id == 6)
										borderColor: "rgba(255,0,225,1)",
									@endif
									backgroundColor: "rgba(0,0,0,0)",
								},
						@endif
				@endforeach
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