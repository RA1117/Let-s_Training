<!DOCTYPE html>
<html>
<head>
    <title>Chart Sample</title>
</head>
<body>
    <div style="width: 50%">
        <canvas id="chart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById("chart").getContext("2d");
        const myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: ["月", "火曜", "水曜", "木曜", "金曜", "土曜", "日曜"],
                datasets: [
                    {
                        label: "data 1",
                        data: [12, 19, 3, 5, 2, 3, -10],
                        borderColor: "rgb(75, 192, 192)",
                        backgroundColor: "rgba(75, 192, 192, 0.5)",
                    },
                    {
                        label: "data 2",
                        data: [8, 9, 13, 15, 1, 14, 1],
                        borderColor: "rgb(153, 102, 255)",
                        backgroundColor: "rgba(153, 102, 255, 0.5)",
                    },
                ],
            }
        });
    </script>
</body>
</html>