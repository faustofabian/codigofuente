<!--   <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://www.desarrolloweb.com"> -->
<!--<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://192.168.0.6/index1.php">-->

<!Doctype html>
<html lang="es">
 <head>
  <title><?php echo '.:Indicadores  de Sensores  de temparatura en Tiempo Real:.';?></title>
          <style type='text/css'> body { color: red; background-image: url('fondocolores.gif'); } </style>
          <!--<style type='text/css'> body { color: red; background-image: url('http://www.solofondos.com/wp-content/uploads/2015/11/fondocolores.gif'); } </style>-->
     <meta charset='utf-8'>
     <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <table  style =" width:100%">
    <tr>
     <th style ="WIDTH:16%" > </th>
     <th style ="WIDTH:54%" ><center> <hr size='5' color=#00CC00> <h1>Indicadores de Sensores de temparatura en Tiempo Real:</h1> </center> </th>
     <th> </th>
    </tr>

     <tr>
         <td> </td>
         <td><center> <div class="wrap">
                     <ul id="menu">
                         <li><a href="#">Inicio  </a></li>
                         <li><a href="grafico2.php">Ver Gráfico</a></li>
                     <!--    <li><a href="#">Imprimir</a></li>
                         <li><a href="#">Ver puntos </a></li>
                         <li><a href="#">Almacenar ensayo en la base de datos</a></li> -->
                     </ul>

                 </div> </h1> </center> </td>
         <td> </td>
     </tr>

     <tr>
      <td > </td>

       <td>  <?php //echo '<p>Estado de los sensores</p>';
         $html = file_get_contents('http://192.168.0.4:80'); //Convierte la información de la URL en cadena
         $cadena = $html;
         ?>
        <!-- <center>-->

             <hr size='5' color=#00CC00>
             <br>
            <center>
             <table border=1 <!--width='25%'-->
                 <tr>
                     <td>  <center>  Probetas según perfiles   </center>  </td>
                     <td>  <center>   Humedad del suelo  </center>  </td>
                     <td>  <center>  Humedad del ambiente </center>  </td>
                     <td>  <center>   Temperatura  del ambiente  </center>  </td>
                 </tr>
                 <tr>
                     <td>  <center>   Perfil 1    </center>  </td>
                     <td>  <center>   <?php
                             $e= 0;
                             do {
                                 $caracter = substr($cadena, 162+$e, 1);
                                 $e++;
                             } while ($caracter <> ";");
                             $acumulador = 162+$e;
                             // echo "<script> alert('primer variable')</script>";

                             $rest1 = substr($cadena, 162, $e-1);

                             $e= 0;
                             do {
                                 $caracter = substr($cadena, $acumulador+$e, 1);
                                 $e++;
                             } while ($caracter <> ";");
                             // echo "<script> alert('2da variable')</script>";
                             $rest2 = substr($cadena, $acumulador, $e-1);

                             $acumulador = $acumulador + $e;

                             $e= 0;
                             do {
                                 $caracter = substr($cadena, $acumulador+$e, 1);
                                 $e++;
                             } while ($caracter <> ";");
                             // echo "<script> alert('tercer variable')</script>";
                             $rest3 = substr($cadena, $acumulador, $e-1);
                             $acumulador = $acumulador + $e;
                             $e= 0;
                             do {
                                 $caracter = substr($cadena, $acumulador+$e, 1);
                                 $e++;
                             } while ($caracter <> ";");
                             // echo "<script> alert('4ta variable')</script>";

                             $rest4 = substr($cadena, $acumulador, $e-1);
                             $acumulador = $acumulador + $e;


                             $e= 0;
                             do {
                                 $caracter = substr($cadena, $acumulador+$e, 1);
                                 $e++;
                             } while ($caracter <> ";");
                             // echo "<script> alert('5ta variable')</script>";
                             $rest5 = substr($cadena, $acumulador, $e-1);

                             $acumulador = $acumulador + $e;

                             $e= 0;
                             do {
                                 $caracter = substr($cadena, $acumulador+$e, 1);
                                 $e++;
                             } while  ($caracter <> ";" and $caracter <> "<");    //($caracter <> ";" and $acumulador+$e < strlen($cadena));
                             // echo "<script> alert('6ta variable')</script>";
                             $rest6 = substr($cadena, $acumulador, $e-1);

                             $acumulador = $acumulador + $e;
                              //$rest1 = substr($cadena, 162, 4);
                             echo  $rest1;?>  </center>  </td>
                     <td>  <center>  <?php echo  $rest2;
                                       // substr($cadena, 175, 2);    ?>  </center>  </td>
                     <td>  <center>  <?php echo  $rest4;
                                       //= substr($cadena, 167, 2);    ?>  </center>  </td>
                 </tr>
                 <tr>
                     <td>  <center>   Perfil 2    </center>  </td>
                     <td>  <center>   <?php echo  $rest3
                                       //= substr($cadena, 170, 4);    ?>  </center>  </td>
                     <td>  <center>  <?php echo  $rest2
                                       //= substr($cadena, 175, 2);    ?>  </center>  </td>
                     <td>  <center>  <?php echo  $rest4
                                       //= substr($cadena, 167, 2);    ?>  </center>  </td>
                 </tr>
                 <tr>
                     <td>  <center>   Perfil 3    </center>  </td>
                     <td>  <center>   <?php echo  $rest5;
                                       //= substr($cadena, 178, 4);    ?>  </center>  </td>
                     <td>  <center>  <?php echo  $rest2;
                                       //= substr($cadena, 175, 2);    ?>  </center>  </td>
                     <td>  <center>  <?php echo  $rest4;
                                      //  = substr($cadena, 167, 2);    ?>  </center>  </td>
                 </tr>
                 <tr>
                     <td>  <center>   Perfil 4    </center>  </td>
                     <td>  <center>   <?php echo  $rest6;
                                      //= substr($cadena, 183, 4);    ?>  </center>  </td>
                     <td>  <center>  <?php echo  $rest2;
                                      //= substr($cadena, 175, 2);    ?>  </center>  </td>
                     <td>  <center>  <?php echo  $rest4;
                                      //= substr($cadena, 167, 2);    ?>  </center>  </td>
                 </tr>
             </table>
           <hr size='5' color=#00CC00>
             <?php //echo '<p>Estado de los sensores</p>';
             //$html = file_get_contents('http://192.168.0.4:80'); //Convierte la información de la URL en cadena
             if( $html === false ) { echo " la cadena esa vacia "; }else {
                 $cadena = $html;
                 $mystring = $cadena;
                 $findme = 'fausto';
                 $pos = strpos($mystring, $findme);

                 if ($pos === false) {
                     echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
                 } else {
                     // echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
                     // echo " y existe en la posición $pos" . '</p>';
                     // echo $cadena;  echo "<br>";


                     /*echo "<br>";
                     echo "Lectura primer sensor humedad en suelo 1º perfil ". $rest1 = substr($cadena, 162, 4);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     echo "Lectura segundo  sensor humedad ambiente  ". $rest2 = substr($cadena, 167, 2);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     echo "Lectura tercer   sensor humedad en suelo 2º perfil  ". $rest3 = substr($cadena, 170, 4);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     echo "Lectura cuarto   sensor temperatura hambiente  ". $rest4 = substr($cadena, 175, 2);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     echo "Lectura qinto    sensor humedad en suelo 3º perfil  ". $rest5 = substr($cadena, 178, 4);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     echo "Lectura Sexto   sensor humedad en suelo 4º perfil  ". $rest3 = substr($cadena, 183, 4);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     setlocale(LC_ALL,"es_ES");
                     date_default_timezone_set('UTC');
                     echo date('l jS \of F Y h:i:s A');
                     echo "<br>";
                     echo "<br>";
                     //$hora =
                     echo   $fecha = date("d")."/".  date("m")."/".date("Y");
                     echo "<br>";
                     echo "<br>"; */




                 }
             }
             //Ejemplo aprenderaprogramar.com, archivo escribir.php

             /*  $file = fopen("archivo.txt", "a");

               fwrite($file, $rest1.";".$rest2.";".$rest3.";".$rest4.";".date('l jS \of F Y h:i:s A') . PHP_EOL);


               fclose($file); */
             ?>

             <!-- //$rest = substr("abcdef", 0, -1);  // devuelve "abcde"
             //$rest = substr("abcdef", 2, -1);  // devuelve "cde"
             // $rest = substr("abcdef", 4, -4);  // devuelve false
             // $rest = substr("abcdef", -3, -1); // devuelve "de"
             //  ?>
            -->
         </center>



 <!-- para procesar experimento -->

 <?php //echo '<p>Estado de los sensores</p>';
 $verificar = $_POST['ensayo'].$_POST["segundos"].$_POST["minutos"].$_POST["perfil1"].$_POST["perfil2"].$_POST["perfil3"].$_POST["perfil1"];
 //$verificar = $_GET['ensayo'].$_GET["segundos"].$_GET["minutos"].$_GET["perfil1"].$_GET["perfil2"].$_GET["perfil3"].$_GET["perfil1"];
 /*if(isset($_GET['ensayo'])){
    $verificar = $_GET['ensayo'].$_GET["segundos"].$_GET["minutos"].$_GET["perfil1"].$_GET["perfil2"].$_GET["perfil3"].$_GET["perfil1"];
    }
  else{
    //$verificar = '';
  }*/
 
 //$verificar = $_GET['ensayo'].$_GET["segundos"].$_GET["minutos"].$_GET["perfil1"].$_GET["perfil2"].$_GET["perfil3"].$_GET["perfil1"];
 //echo  strlen($verificar);
 //$html = file_get_contents('http://192.168.0.4:80'); //Convierte la información de la URL en cadena
 if( strlen($verificar) === 0 ) { }else {
     $bandera = false;
     if( strlen($_POST["ensayo"]) === 0 ) { echo "<script> alert('Faltan cargas datos para el ensayo')  </script>";
         $bandera = true;}
     if( strlen($_POST["segundos"]) === 0 and $bandera === false ) { echo "<script> alert('Faltan cargas datos para el ensayo')  </script>";
         $bandera = true;}
     if( strlen($_POST["minutos"]) === 0 and $bandera === false ) { echo "<script> alert('Faltan cargas datos para el ensayo')  </script>";
         $bandera = true;}
     if( strlen($_POST["perfil1"]) === 0 and $bandera === false ) { echo "<script> alert('Faltan cargas datos para el ensayo')  </script>";
         $bandera = true;}
     if( strlen($_POST["perfil2"]) === 0 and $bandera === false ) { echo "<script> alert('Faltan cargas datos para el ensayo')  </script>";
         $bandera = true;}
     if( strlen($_POST["perfil3"]) === 0 and $bandera === false ) { echo "<script> alert('Faltan cargas datos para el ensayo')  </script>";
         $bandera = true;}
     if( strlen($_POST["perfil4"]) === 0 and $bandera === false ) { echo "<script> alert('Faltan cargas datos para el ensayo')  </script>";
         $bandera = true;}
       if( $bandera === false ) {
           $i = 1;
   // echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
                     // echo " y existe en la posición $pos" . '</p>';
                     // echo $cadena;  echo "<br>";


                     /*echo "<br>";
                     echo "Lectura primer sensor humedad en suelo 1º perfil ". $rest1 = substr($cadena, 162, 4);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     echo "Lectura segundo  sensor humedad ambiente  ". $rest2 = substr($cadena, 167, 2);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     echo "Lectura tercer   sensor humedad en suelo 2º perfil  ". $rest3 = substr($cadena, 170, 4);  // devuelve "abcde"

                     echo "<br>";
                     echo "<br>";
                     echo "Lectura cuarto   sensor temperatura hambiente  ". $rest4 = substr($cadena, 175, 2);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     echo "Lectura qinto    sensor humedad en suelo 3º perfil  ". $rest5 = substr($cadena, 178, 4);  // devuelve "abcde"
                     echo "<br>";
                     echo "<br>";
                     echo "Lectura Sexto   sensor humedad en suelo 4º perfil  ". $rest3 = substr($cadena, 183, 4);  // devuelve "abcde"
                     echo "<br>";
                       */
           $file = fopen("archivo.txt", "w");
           fwrite($file, "Nombre del Ensayo; H.S. P 1; "." H.A.; "." H.S p2; "." T.A.; "." H.S. p3; "." H.S. p4;"." Altura P1"." Altura P2"." Altura P3;"." Altura P4; "." fecha". PHP_EOL);
           fclose($file);
             $i= 1;
           while ($i <= (60 * intval($_POST["minutos"]) )) {
              // echo "<script> alert('sumo 10 segundos')</script>";
               $i = $i + intval($_POST["segundos"]);
               $html = file_get_contents('http://192.168.0.4:80');
               $cadena = $html;
               $e= 0;
               do {
                   $caracter = substr($cadena, 162+$e, 1);
                   $e++;
               } while ($caracter <> ";");
               $acumulador = 162+$e;
               // echo "<script> alert('primer variable')</script>";

               $rest1 = substr($cadena, 162, $e-1);
               $e= 0;
               do {
                   $caracter = substr($cadena, $acumulador+$e, 1);
                   $e++;
               } while ($caracter <> ";");
               // echo "<script> alert('2da variable')</script>";
               $rest2 = substr($cadena, $acumulador, $e-1);

                $acumulador = $acumulador + $e;

               $e= 0;
               do {
                   $caracter = substr($cadena, $acumulador+$e, 1);
                   $e++;
               } while ($caracter <> ";");
               // echo "<script> alert('tercer variable')</script>";
               $rest3 = substr($cadena, $acumulador, $e-1);
               $acumulador = $acumulador + $e;
               $e= 0;
               do {
                   $caracter = substr($cadena, $acumulador+$e, 1);
                   $e++;
               } while ($caracter <> ";");
               // echo "<script> alert('4ta variable')</script>";

               $rest4 = substr($cadena, $acumulador, $e-1);
               $acumulador = $acumulador + $e;


               $e= 0;
               do {
                   $caracter = substr($cadena, $acumulador+$e, 1);
                   $e++;
               } while ($caracter <> ";");
               // echo "<script> alert('5ta variable')</script>";
               $rest5 = substr($cadena, $acumulador, $e-1);

               $acumulador = $acumulador + $e;

               $e= 0;
               do {
                   $caracter = substr($cadena, $acumulador+$e, 1);
                   $e++;
               } while  ($caracter <> ";" and $caracter <> "<");    //($caracter <> ";" and $acumulador+$e < strlen($cadena));
               // echo "<script> alert('6ta variable')</script>";
               $rest6 = substr($cadena, $acumulador, $e-1);

               $acumulador = $acumulador + $e;


                 $file = fopen("archivo.txt", "a");
                 fwrite($file, $_POST["ensayo"].";   ".$rest1.";   ".$rest2.";   ".$rest3.";   ".$rest4.";   ".$rest5.";   ".$rest6.";   ".$_POST["perfil1"].";   " .$_POST["perfil2"].";   ".$_POST["perfil3"].";  " .$_POST["perfil4"].";   ".date('l jS \of F Y h:i:s A') . PHP_EOL);
                 fclose($file);
               // echo "<script> alert('esperar 10 segundos')</script>";
               sleep( intval($_POST["segundos"]));
               /*  echo $i++;  el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
           }



           echo "<script> alert('el ensayo se guardó en un archivo de texto')</script>";



     }
 }

 //Ejemplo aprenderaprogramar.com, archivo escribir.php

 /*  $file = fopen("archivo.txt", "a");

   fwrite($file, $rest1.";".$rest2.";".$rest3.";".$rest4.";".date('l jS \of F Y h:i:s A') . PHP_EOL);


   fclose($file); */


 ?>

 <!-- para procesar experimento -->



 </td>
       <td> </td>
     </tr>
 <tr>
     <td></td>
     <td>  <div class="caja"><p>En las siguientes entradas cargue a que distancia se encuentra cada perfil en CMs de la superficie</p>

             <form action="index1.php" method="post" >
                 Nombre del Ensayo: <input type="text" name="ensayo" size="12">
                 Perfil 1: <input type="text" name="perfil1" size="2">
                 Perfil 2: <input type="text" name="perfil2" size="2">
                 Perfil 3: <input type="text" name="perfil3" size="2">
                 Perfil 4: <input type="text" name="perfil4" size="2"><br>
                 Intervalo de tiempo en segundos("para la lectura"): <input type="text" name="segundos" size="4">
                 Durancion del ensayo en minutos: <input type="text" name="minutos" size="4">
                 <p>
                     <input type="submit" value="Procesar Ensayo">
                     <input type="reset" value="Borrar">
                 </p>
             </form>
                           </div>  </td>
     <td></td>
 </tr>
 <tr>
     <td></td>
     <td>
         <center> <div class="wrap">
                 <ul id="menu">
                     <!--<li><a href="#">Inicio </a></li>
                     <li><a href="#">Ver Gráfico</a></li>
                     <li><a href="#">Imprimir</a></li>
                     <li><a href="#">Ver puntos </a></li>-->
                     <li><a href="#">procesar ensayo</a></li>
                 </ul>

             </div>  </center>
         </td>
     <td></td>

 </tr>

 </table>
 </body>
</html>
