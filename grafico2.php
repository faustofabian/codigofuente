<html>
<head>
    <style type='text/css'> body { color: red; background-image: url('http://www.solofondos.com/wp-content/uploads/2015/11/fondocolores.gif'); } </style>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('number', 'x');
            data.addColumn('number', 'values1');
            data.addColumn({ id: 'i0',type: 'number',role: 'interval'});
            data.addColumn({ id: 'i1',type: 'number',role: 'interval'});
            data.addColumn({ id: 'i2',type: 'number',role: 'interval'});
          /*  data.addColumn({ id: 'i2',type: 'number',role: 'interval'});
          /*  data.addColumn({ id: 'i2',type: 'number',role: 'interval'});
          /*  data.addColumn({ id: 'i2',type: 'number',role: 'interval'});*/

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
                <?php  $file = fopen("archivo.txt", "r");
                fgets($file);
                $cadena = fgets($file);
                $rest1 = substr($cadena, -6, 2);
                $rest = substr(fgets($file), -6, 2);
                if ($rest > $rest1){$escala = intval($rest)-intval($rest1);}else{   $escala = (intval($rest)+60)-intval($rest1);};
                $escalacero =$escala;
                //fgets($file);
                //$cadena = fgets($file);
                $i= 1;
                do {
                    $caracter = substr($cadena, $i, 1);
                    $i++;
                } while ($caracter <> ";");
                $constante = $i;
                while(!feof($file)) {
                    echo  "[";echo $escalacero; echo",";
                    $e= $constante;
                    do {
                        $caracter = substr($cadena, $e, 1);
                        $e++;
                    } while ($caracter <> ";");
                    echo  substr($cadena, $i+3, ($e-($i+4)) );echo",";
                    do {
                        $caracter = substr($cadena, $e, 1);
                        $e++;
                    } while ($caracter <> ";");
                    $i=$e;
                    do {
                        $caracter = substr($cadena, $i, 1);
                        $i++;
                    } while ($caracter <> ";");

                    echo substr($cadena, $e+3,  ($i-($e+4)));echo ",";
                    $e=$i;
                    do {
                        $caracter = substr($cadena, $e, 1);
                        $e++;
                    } while ($caracter <> ";");
                    $i=$e;
                    do {
                        $caracter = substr($cadena, $e, 1);
                        $e++;
                    } while ($caracter <> ";");



                    echo substr($cadena, $i+3, ($e-($i+4)) );echo",";
                    $i=$e;
                    do {
                        $caracter = substr($cadena, $i, 1);
                        $i++;
                    } while ($caracter <> ";");
                    echo substr($cadena, $e+3, ($i-($e+4)) ); echo"],";
                    $i=$constante;
                    // echo $escalacero; echo",";  echo '50';echo","; echo '50';echo ","; echo '50';echo","; echo '50';echo"],";
                    $escalacero= $escalacero + $escala;
                    $cadena = fgets($file);};
                fclose($file);?>
            ]);










            /* data.addRows([
                [05, 90  , 31, 23, 10],
                [16, 91  , 32, 15, 15],
                [26, 92  , 80, 33, 19],
                [37, 93  , 45, 44, 24],
                [48, 94  , 54, 56, 31],
                [58, 95  , 36, 70, 40]]);
                 */



            // The intervals data as narrow lines (useful for showing raw source data)
            var options_lines = {
                title: 'Linea de intérvalos de los sensores: azul p1, rojo p3, verde p2, amarillo p4',
                lineWidth: 4,
                curveType:'function',
                interval: {
                    'i0': { 'style':'line', 'color':'#D3362D', 'lineWidth': 4 },
                    'i1': { 'style':'line', 'color':'#dff161', 'lineWidth': 3 },
                    'i2': { 'style':'line', 'color':'#5F9654', 'lineWidth': 4 },
                    'i3': { 'style':'line', 'color':'#363bf1', 'lineWidth': 4 },
                },
                legend: 'none',
            };
            var chart_lines = new google.visualization.LineChart(document.getElementById('chart_lines'));
            chart_lines.draw(data, options_lines);
        }
    </script>
</head>

<body>
<table  style =" width:100%">
    <tr>
        <th style ="WIDTH:16%" >

            <?php  $file = fopen("archivo.txt", "r");
            fgets($file);
            $cadena = fgets($file);
            $rest1 = substr($cadena, -6, 2);
            $rest = substr(fgets($file), -6, 2);
            if ($rest > $rest1){$escala = intval($rest)-intval($rest1);}else{   $escala = (intval($rest)+60)-intval($rest1);};
            $escalacero =$escala;
            //fgets($file);
            //$cadena = fgets($file);
            $i= 1;
            do {
                $caracter = substr($cadena, $i, 1);
                $i++;
            } while ($caracter <> ";");
            $constante = $i;
            while(!feof($file)) {
                echo  "[";echo $escalacero; echo",";
                $e= $constante;
                do {
                    $caracter = substr($cadena, $e, 1);
                    $e++;
                } while ($caracter <> ";");
                echo  substr($cadena, $i+3, ($e-($i+4)) );echo",";
                do {
                    $caracter = substr($cadena, $e, 1);
                    $e++;
                } while ($caracter <> ";");
                $i=$e;
                do {
                    $caracter = substr($cadena, $i, 1);
                    $i++;
                } while ($caracter <> ";");

                echo substr($cadena, $e+3,  ($i-($e+4)));echo ",";
                $e=$i;
                do {
                    $caracter = substr($cadena, $e, 1);
                    $e++;
                } while ($caracter <> ";");
                $i=$e;
                do {
                    $caracter = substr($cadena, $e, 1);
                    $e++;
                } while ($caracter <> ";");



                 echo substr($cadena, $i+3, ($e-($i+4)) );echo",";
                 $i=$e;
                do {
                    $caracter = substr($cadena, $i, 1);
                    $i++;
                } while ($caracter <> ";");
                 echo substr($cadena, $e+3, ($i-($e+4)) ); echo"],";
                 $i=$constante;
                // echo $escalacero; echo",";  echo '50';echo","; echo '50';echo ","; echo '50';echo","; echo '50';echo"],";
             $escalacero= $escalacero + $escala;
             $cadena = fgets($file);};
            fclose($file);?>

        </th>
        <?php   $file = fopen("archivo.txt", "r");
                    fgets($file);
                 $cadena = fgets($file);
                 $rest1 = substr($cadena, -6, 2);
                 $rest = substr(fgets($file), -6, 2);
                 if ($rest > $rest1){$escala = intval($rest)-intval($rest1);}else{$escala = intval($rest1)-intval($rest);};
                   $i= 1;
                      do {
                          $caracter = substr($cadena, $i, 1);
                           $i++;
                     } while ($caracter <> ";");?>
        <th style ="WIDTH:54%" ><center> <hr size='5' color=#00CC00> <h1>  Gráfico  Indicador  de Sensores según ensayo: <?php echo substr($cadena, 0 , $i-1); fclose($file); ?>
                </h1> </center> </th>
        <th> </th>
    </tr>

    <tr>
        <td> </td>
        <td><center> <div class="wrap">
                    <ul id="menu">
                        <li><a href="index1.php">Ir al  Inicio </a></li>

                    </ul>

                </div> </h1> </center> </td>
        <td> </td>
    </tr>
    <tr>
        <td> </td>
        <td><center>  <div id="chart_lines" style="width: 900px; height: 500px;"> </div>  </center> </td>
        <td> </td>
    </tr>







</body>
</html>

