<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Hola mundo</h1>";
    ?>
    <h2>Qué tal</h2>
    <?php
    echo "<h3>Otro hola mundo</h3>";
    // Comentario
    /**
     * Comentario
     */
    # Comentario
    $entero = 1; # int
    $decimal = 1.5; # float
    $exponente = 3e5; #float

    var_dump($exponente); // Muestra el tipo de funcion y el resultado

    echo "<br></br>";

    $string1 = "Hola";
    $string2 = 'Hola';
    
    echo "<h1>Formas de concatenar Strings</h1>";
    
    echo "Texto: $string1";
    echo "<br>";
    echo 'Texto: $string1';
    echo "<br>";
    echo $string1 . " " . $string2;
    echo "<br>";
    echo "<h1>$string1</h1>";
    echo "<h1>" . $string1 . "</h1>";
    
    echo "<h1>Arrays en PHP</h1>";
    
    $array = [1,"2",3];
    $array2 = ["a","b","c"];
    var_dump($array);
    echo "<br><br>";
    var_dump($array2);

    echo "<h1>Booleanos</h1>";
    
    $b = true;
    $c = false;
    echo "<br>";
    var_dump($b);
    var_dump($c);
    
    echo "<h1>Variables</h1>";
    
    define("EDAD", 25);
    ?>

    <?php
    echo EDAD;
    ?>

    <?php
        $dia = date("d");
        if ($dia <= 15) {
            echo "<br>Estamos a principios de mes</br>";
        } else {
            echo "<br>Estamos a finales de mes</br>";
        }
    ?>

    <?php

        $hora = date("H");
        if ($hora < "12") {
            echo "<br> Buenos dias </br>";
        } elseif ($hora < "20") {
            echo "<br> Buenas tardes </br>";
        } else {
            echo "<br> Buenas noches </br>";
        }
    ?>

    <?php

        $aleatorio = rand(1,150);
        if ($aleatorio < 10) {
            echo "<br> El numero " . $aleatorio . " tiene una cifra </br>";
        } else if ($aleatorio < 100) {
            echo "<br> El numero " . $aleatorio . " tiene dos cifras </br>";
        } else {
            echo "<br> El numero " . $aleatorio . " tiene tres cifras </br>";
        }
    ?>

    <?php
        $y = 50;
        $x = $aleatorio;

        if ($x > $y):
            echo $x." es mayor que ".$y;
        elseif ($x == $y):
            echo $x." igual ".$y;
        else:
            echo $x." no es ni mayor ni igual a ".$y;
        endif; 
    ?>

    <?php
        $n = rand(1,3); 
        switch ($n) {
            case 1:
                echo "<br>$n es igual a 1</br>";
                break;
            case 2:
                echo "<br>$n es igual a 2</br>";
            default:
                echo "<br>$n es igual a 3</br>";
                break;
        }
    ?>

    <?php
        $dia = date("l");
        $diaEsp = "";

        if ($dia == "Monday"){
            $diaEsp = "Lunes";
        } elseif($dia == "Tuesday"){
            $diaEsp = "Martes";
        } elseif($dia == "Wednesday"){
            $diaEsp = "Miercoles";
        } elseif($dia == "Thurday"){
            $diaEsp = "Jueves";
        } elseif($dia == "Friday"){
            $diaEsp = "Viernes";
        }

        switch ($diaEsp) {
            case "Lunes":
            case "Miercoles":
            case "Viernes":
                echo "Hoy $diaEsp hay clases de Desarrollo Web Servidor";
                break;
            default:
                echo "Hoy no hay clases";
                break;
        }
     
    ?>
</body>
</html>