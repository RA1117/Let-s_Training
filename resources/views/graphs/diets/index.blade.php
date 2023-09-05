<x-app-layout>
    <x-slot name="header">
        　Diet Graph
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
	//平均体重ログ
	var diet_log = [
		@foreach($records as $record)
        	{{ $record->weight }},
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
					borderColor: "rgba(0,0,255,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
			]
		},
   });
   </script>
   <!-- グラフを描画ここまで -->
</x-app-layout>