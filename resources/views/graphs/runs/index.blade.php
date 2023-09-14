<x-app-layout>
    <x-slot name="header">
        　Run Graph
    </x-slot>
   	<canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <script>
	//ラベル
	var labels = [
		@foreach($records as $record)
            '{{ $record->date }}',
        @endforeach
	];
	//走行距離ログ
	var diet_log = [
		@foreach($records as $record)
        	{{ $record->run_distance }},
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
					label: '走行距離[km]',
					data: diet_log,
					borderColor: "rgba(0,0,255,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
			]
		},
   });
   </script>
   
   <div class='paginate'>{{ $records->links() }}</div>
   
   <!-- グラフを描画ここまで -->
</x-app-layout>