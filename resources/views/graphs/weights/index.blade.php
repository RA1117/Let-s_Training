<x-app-layout>
    <x-slot name="header">
        　Weight Graph
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
	var weight_log = [
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
					label: '体重[kg]',
					data: weight_log,
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