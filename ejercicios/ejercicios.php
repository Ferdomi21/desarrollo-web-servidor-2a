<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    
    <?php
    echo '<br>1. Genera un numero aleatorio del 1 al 10 y muestra si el numero generado es par o impar</br>';
    //Ejercicio 1
    $n = rand(1,10);
    if (($n % 2) == 0) {
        echo '<br>El numero ' . $n . ' es par</br>';
    } else {
        echo '<br>El numero ' . $n . ' es impar</br>';
    };
    ?>

    <?php
    echo '<br>2. Genera un numero aleatorio del -10 al 10 y muestra si es positivo, negativo o cero</br>';
    //Ejercicio 2
    $n = rand(-10,10);
    if ($n < 0){
        echo '<br>El numero ' . $n . ' es negativo</br>';
    } elseif ($n > 0) {
        echo '<br>El numero ' . $n . ' es positivo</>';
    } else {
        echo '<br>El numero es ' . $n;
    };
    ?>

    <?php
    echo '<br>4. Muestra, en español, el dia y el mes actual. Ejemplo: "1 de enero". PISTA: Usa la funcion date y la estructura switch </br>';

    $dia = date('j');
    $mes = date('n');

    switch ($mes){
        case 1:
            $mesEsp = "enero";
            break;
        case 2:
            $mesEsp = "febrero";
            break;
        case 3:
            $mesEsp = "marzo";
            break;
        case 4:
            $mesEsp = "abril";
            break;
        case 5:
            $mesEsp = "mayo";
            break;
        case 6:
            $mesEsp = "junio";
            break;
        case 7:
            $mesEsp = "julio";
            break;
        case 8:
            $mesEsp = "agosto";
            break;
        case 9:
            $mesEsp = "septiembre";
            break;
        case 10:
            $mesEsp = "octubre";
            break;
        case 11:
            $mesEsp = "noviembre";
            break;
        case 12:
            $mesEsp = "diciembre";
            break;
    }
    echo $dia . " de " . $mesEsp;
    ?>

<?php

echo '<br>4. Imprime los numeros del 0 al 20 y súmalos </br>';
echo '<ul>';
$total = 0;
for($i=0; $i<= 20; $i++){
    $total +=$i;
};
echo "<li>$total</li>";
echo '</ul>';
?>
</body>
</html>

