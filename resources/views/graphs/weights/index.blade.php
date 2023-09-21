<x-app-layout>
    <x-slot name="header">
        　Weight Graph
    </x-slot>
    <h1 class=page_title>体重</h1>
    <h1 class=graph_title>体重の推移</h1>
    <div class='graph_style'>
   		<canvas id="weight_Chart"></canvas>
   	</div>
   	<div class='graph_link'>
	   	<h2>グラフ</h2>
	   	<br>
	    <a href='/records/graphs/run_graph'><h2 class='run_graph'>全身</h2></a>
	    <br>
	    <a href='/records/graphs/diet_graph'><h2 class='diet_graph'>食事</h2></a>
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
	//体重ログ
	var weight_log = [
		@foreach($records as $record)
        	{{ $record->weight }},
        @endforeach
	];

	//グラフを描画
   var ctx = document.getElementById("weight_Chart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: labels,
			datasets: [
				{
					label: '体重[kg]',
					data: weight_log,
					borderColor: "rgba(255,20,147,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
			]
		},
   });
   </script>
   <!-- グラフを描画ここまで -->
   <style>
	.page_title{
		font-size: 30px;
	}
   	.graph_title{
   		text-align: center;
   		font-size: 30px;
   	}
   	.graph_style{
   		position: absolute;
        left: 270px;
        top: 270px;
   		width:1000px;
   		height:500px;
   	}
   	.graph_link{
   		position: absolute;
        left: 50px;
        top: 420px;
   	}
   </style>
</x-app-layout>