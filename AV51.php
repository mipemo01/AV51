<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AV51</title>
</head>
<body>
<?php

$pomodoroHaters = [
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', 'A', 'A', 'A', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'A', '0', 'A', 'A', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', 'A', 'A', '0', '0', 'A', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '0', 'A', 'A', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~']
];
$impacts = [
    [20, 4],
    [2, 13],
    [13, 12],
    [3, 17],
    [2, 13],
    [5, 19],
    [6, 18],
    [5, 2],
    [20, 13],
    [9, 7],
    [5, 9],
    [15, 16],
    [16, 13],
    [16, 9],
    [16, 0],
    [3, 19],
    [19, 8],
    [1, 16],
    [18, 4],
    [21, 23],
    [7, 17],
    [22, 15],
    [21, 6],
    [14, 8],
    [12, 23],
    [7, 7],
    [22, 4],
    [3, 21],
    [2, 3],
    [8, 11],
    [0, 4],
    [7, 21],
    [11, 4],
    [7, 15],
    [6, 17],
    [5, 19],
    [4, 19],
    [4, 7],
    [23, 21],
    [15, 20],
    [2, 9],
    [21, 2],
    [1, 13],
    [7, 10],
    [21, 5],
    [13, 17],
    [2, 14],
    [11, 14],
    [22, 17],
    [18, 22],
    [2, 23],
    [3, 1],
    [18, 6],
    [17, 12],
    [18, 18],
    [20, 2],
    [3, 14],
    [11, 21],
    [6, 5],
    [6, 2],
    [12, 23],
    [18, 18],
    [21, 6],
    [10, 12],
    [5, 4],
    [16, 19],
    [8, 10],
    [12, 21],
    [15, 1],
    [20, 14],
    [3, 20],
    [6, 19],
    [20, 13],
    [15, 4],
    [10, 2],
    [5, 16],
    [20, 1],
    [12, 13],
    [11, 5],
    [12, 14],
    [8, 3],
    [6, 8],
    [19, 7],
    [16, 9],
    [13, 20],
    [3, 5],
    [1, 0],
    [20, 14],
    [12, 21],
    [12, 16],
    [15, 7],
    [9, 1],
    [1, 18],
    [20, 6],
    [8, 6],
    [22, 1],
    [10, 22],
    [19, 19],
    [7, 16],
    [8, 8]
];

//ESCRIBE AQUÍ TU PROGRAMA PRINCIPAL
echo "<h1> EJ1 </h1>";
echo "<br>";
mostrarMapa($pomodoroHaters);
aplicarImpactos($pomodoroHaters, $impacts);
echo "<br>";
echo "<h1> EJ2 </h1>";
echo "<br>";
mostrarMapa($pomodoroHaters);
echo "<br>";
echo "<h1> EJ3 </h1>";
echo "<br>";

$personasAfectadas = calcularPersonasAFectadas($pomodoroHaters);
$totalMlColirio = $personasAfectadas * 25;
$totalLitrosColirio = $totalMlColirio / 1000; 

echo "Personas afectadas: $personasAfectadas\n";
echo "Litros de colirio necesarios: " . number_format($totalLitrosColirio, 2) . " L\n";

echo "<br>";
echo "<h1> EJ4 </h1>";
echo "<br>";

aplicarImpactostotales($pomodoroHaters, $impacts);
mostrarMapa($pomodoroHaters);

echo "<br>";
echo "<h1> EJ5 </h1>";
echo "<br>";
dañostototales($pomodoroHaters);

echo "<br>";
echo "<h1> EJ6 </h1>";
echo "<br>";
partetotaldelmar($pomodoroHaters);
patemardañada($pomodoroHaters);

echo "<br>";
echo "<h1> EJ7 </h1>";
echo "<br>";
pescabak($pomodoroHaters);

//ESCRIBE AQUÍ LA DEFINICIÓN DE LAS FUNCIONES

function mostrarMapa($mapa) {
    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            echo $celda . " "; 
        }
        echo "<br>"; 
    }
}

function aplicarImpactos(&$mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $fila = $impacto[0];
        $columna = $impacto[1];
        
        if ($mapa[$fila][$columna] == 'A') {
            $mapa[$fila][$columna] = 'C'; 
        }
    }
}

function calcularPersonasAFectadas($mapa) {
    $habitantesPorKm2 = 5000;
    $mlPorPersona = 25;
    $totalPersonasAfectadas = 0;
        foreach ($mapa as $fila) {
            foreach ($fila as $celda) {
              if ($celda == 'A') {
            $totalPersonasAfectadas += $habitantesPorKm2;
          }
     }
    }
    return $totalPersonasAfectadas;
}

function aplicarImpactostotales(&$mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $fila = $impacto[0];
        $columna = $impacto[1];
        
        if ($mapa[$fila][$columna] == 'C') {
            $mapa[$fila][$columna] = 'X'; 
        }
        elseif ($mapa[$fila][$columna] == '0'){
                $mapa[$fila][$columna] = 'X';
        }
        elseif ($mapa[$fila][$columna] == '~'){
                $mapa[$fila][$columna] = 'S';
        }
    }
}

function calcularDanios($mapa) {
    $costoNoUrbano = 50000; 
    $costoUrbano = 200000; 
    $totalZonasNoUrbanas = 0;
    $totalZonasUrbanas = 0;
    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            if ($celda == 'A') {
                $totalZonasNoUrbanas++;
            } elseif ($celda == 'C') {
                $totalZonasUrbanas++;
            }
        }
    }
    $danioNoUrbano = $totalZonasNoUrbanas * $costoNoUrbano;
    $danioUrbano = $totalZonasUrbanas * $costoUrbano;
    $danioTotal = $danioNoUrbano + $danioUrbano;
    return $danioTotal;
}

function dañostototales($mapa){
    $nourbana = 50000;
    $urbana = 200000;
    $contUrban = 0;
    $contNoUrbano = 0;
    foreach ($mapa as $fila){ 
       foreach($fila as $casilla){
           if ($casilla == 'C'){
              $contUrban++;}
           if ($casilla == 'X'){
            $contNoUrbano++;}
       }   
   }
   $dañoostotales= $nourbana*$contNoUrbano + $urbana*$contUrban;
   echo "Todos los daños acumulan un total de: ".$dañoostotales. "Є<br>";
}

function partetotaldelmar($mapa){
    $tamaño = 1;
    $marrr = 0;
    $canttt = 0;
    foreach ($mapa as $fila){ 
       foreach($fila as $casilla){
           if ($casilla == '~'){
              $marrr++;}
           if ($casilla == 'S'){
            $canttt++;}
       }   
   }
   $totmarcant = $marrr+$canttt;
   $tamañototal= $tamaño*$totmarcant;
   echo "<br>El mar tiene un tamaño de: ".$tamañototal . "km2" ;
}
function patemardañada($mapa){
$dañ = 0;
foreach ($mapa as $fila){ 
   foreach($fila as $casilla){
       if ($casilla == 'S'){
        $dañ++;}
   }   
}
echo "<br>La parte dañada del mar es: ".$dañ . "km2" ;
}

function pescabak($mapa){
    $partetotaldelmar = 299;
    $patemardañada = 45;
    $bakalao = 2000;
    $bakalaototal = $bakalao*$patemardañada/$partetotaldelmar;
    $kilosbakalao = $bakalaototal*1000;
    $dinerotot = $kilosbakalao * 5;
    echo "<br>Hay un total de ". round($bakalaototal, 2) ." toneladas de pescado"; 
    echo "<br>La ONG podria ganar ". round($dinerotot, 2) ."Є con el pescado"; 
    }


?>
</body>
</html>