<h1>graph</h1>

<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>グラフ</title> 
</head>
 <body>
		<h1>グラフ</h1>
   	<canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <script>
	//ラベル
	var labels = [
		@foreach($records as $record)
			@if($record->weight != NULL)
	            '{{ $record->date }}',
	        @endif
        @endforeach
	];
	//平均体重ログ
	var average_weight_log = [
		@foreach($records as $record)
			@if($record->weight != NULL)
            	{{ $record->weight }},
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
					label: '体重',
					data: average_weight_log,
					borderColor: "rgba(0,0,255,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
			]
		},
		options: {
			title: {
				display: true,
				text: '体重ログ（６ヶ月平均）'
			}
		}
   });
   </script>
   <!-- グラフを描画ここまで -->
 </body>
</html>