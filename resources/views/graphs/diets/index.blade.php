<x-app-layout>
    <x-slot name="header">
        　Diet Graph
    </x-slot>
    <h1 class=page_title>食事量</h1>
    <h1 class=graph_title>食事量の推移</h1>
    <div class='graph_style'>
	   	<canvas id="myChart"></canvas>
	</div>
	<div class='graph_link'>
	   	<h2>グラフ</h2>
	   	<br>
	    <a href='/records/graphs/run_graph'><h2 class='run_graph'>全身</h2></a>
	    <br>
	    <a href='/records/graphs/weight_graph'><h2 class='weight_graph'>体重</h2></a>
		<br>
	    <a href='/bodies/'><h2 class='run_graph'>戻る</h2></a>	    
	    <div class='paginate'>{{ $records->links() }}</div>
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
	//食事量
	var diet_log = [
		@foreach($records as $record)
        	{{ $record->diet }},
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
					label: '食事量[kcal]',
					data: diet_log,
					borderColor: "rgba(0,250,154,1)",
         			backgroundColor: "rgba(225,225,225,8)"
				},
			]
		},
   });
   </script>
   
   <div class='paginate'>{{ $records->links() }}</div>
   
   <!-- グラフを描画ここまで -->
</x-app-layout>