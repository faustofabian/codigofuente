<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('number', 'x');
            data.addColumn('number', 'valores1');
            data.addColumn({id:'i0', type:'number', role:'interval'});
            data.addColumn({id:'i1', type:'number', role:'interval'});
            data.addColumn({id:'i2', type:'number', role:'interval'});
            data.addColumn({id:'i3', type:'number', role:'interval'});
            data.addColumn({id:'i2', type:'number', role:'interval'});
            data.addColumn({id:'i2', type:'number', role:'interval'});

           /* data.addRows([
                [1, <?php echo '50';?>, 90, 110, 85, 96, 104, 120],
                [2, 120, 95, 130, 90, 113, 124, 150],
                [3, 130, 105, 140, 100, 117, 133, 139],
                [4, 90, 85, 95, 85, 88, 92, 95],
                [5, 70, 74, 63, 67, 69, 70, 72],
                [6, 30, 39, 22, 21, 28, 34, 40],
                [7, 80, 77, 83, 70, 77, 85, 90],
                [8, 100, 90, 110, 85, 95, 102, 110],
                [9, 10, 90, 110, 85, 95, 102, 110],
                [10, 39, 25, 45, 85, 95, 102, 110]]); */
            data.addRows([
                [1, <?php echo '50';?>, 90, 110, 85, 96, 104, 120],
                [2, 120, 95, 130, 90, 113, 124, 150],
                [3, 130, 105, 140, 100, 117, 133, 139],
                [4, 90, 85, 95, 85, 88, 92, 95],
                [5, 70, 74, 63, 67, 69, 70, 72],
                [6, 30, 39, 22, 21, 28, 34, 40],
                [7, 80, 77, 83, 70, 77, 85, 90],
                [8, 100, 90, 110, 85, 95, 102, 110],
                [9, 10, 90, 110, 85, 95, 102, 110],
                [10, 39, 25, 45, 85, 95, 102, 110]]);





            // The intervals data as narrow lines (useful for showing raw source data)
            var options_lines = {
                title: 'Line intervals, tailored',
                lineWidth: 4,
                curveType:'function',
                interval: {
                    'i0': { 'style':'line', 'color':'#D3362D', 'lineWidth': 1 },
                    'i1': { 'style':'line', 'color':'#363bf1', 'lineWidth': 3 },
                    'i2': { 'style':'line', 'color':'#5F9654', 'lineWidth': 2 },
                    'i3': { 'style':'line', 'color':'#f2f12b', 'lineWidth': 4 },
                },
                legend: 'none',
            };
            var chart_lines = new google.visualization.LineChart(document.getElementById('chart_lines'));
            chart_lines.draw(data, options_lines);
        }
    </script>
</head>
<body>
<div id="chart_lines" style="width: 900px; height: 500px;"> ver grafico</div>
ver grafico
</body>
</html>

