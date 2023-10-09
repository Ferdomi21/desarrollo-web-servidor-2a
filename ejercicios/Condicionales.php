
<?php
        echo "<h1>Condicionales: Ejercicio 1</h1>";
        $dia = date("d");
        if ($dia <= 15) {
            echo "<br>Estamos a principios de mes</br>";
        } else {
            echo "<br>Estamos a finales de mes</br>";
        }
    ?>

    <?php
        echo "<h1>Ejercicio 2</h1>";
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
        echo "<h1>Ejercicio 3</h1>";
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
        echo "<h1>Ejercicio 4</h1>";
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
        echo "<h1>Caso Switch: Ejercicio 5</h1>";
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
        echo "<h1>Ejercicio 6</h1>";
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