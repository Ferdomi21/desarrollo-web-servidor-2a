<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos</title>
</head>

<body>

    <?php
    function numerosPrimosV1(int $limite) : array {
        for ($i = 2; $i <= $limite; $i++) {
            $arrayPrimos = [];
            $primo = true;
            for ($j = 2; $j <= $i - 1 && $primo; $j++) {
                if ($i % $j == 0) {
                    $primo = false;
                }
            }
            if ($primo)
                echo "$i ";
        }
        return $arrayPrimos;
    }
    $arrayPrimos = numerosPrimosV1(75);

    echo "<br></br>";
    echo "Funcion 2 ";
    echo "<br></br>";

        function numerosPrimosV2(int $limite) : array {
            $primos = [];
            for ($i = 2; $i <= $limite; $i++) {
            $primo = true;
            for ($j = 2; $j <= $i - 1 && $primo; $j++) {
                if ($i % $j == 0) {
                    $primo = false;
                }
            }
            if ($primo) array_push($primos, $i);
        }
        return $primos;

    }

    $primos = numerosPrimosV2(75);
    foreach($primos as $primo){
        echo "$primo ";
    }

    echo "<br></br>";
    echo "Funcion 3: Es primo ";
    echo "<br></br>";

    function esPrimo(int $numero) : bool {
        $primo = true;
        for ($j = 2; $j <= $numero - 1 && $primo; $j++) {
            if ($numero % $j == 0) {
                $primo = false;
            }
            return $primo;
        }
    }
    $primo = esPrimo(7);
    if ($primo) echo "<h3>Es primo</h3>";
    else echo "<h3>No es primo</h3>";

    /*echo '<br>Que aparezcan los 50 primeros numeros primos</br>';
    $contador = 0;
    $i = 2;
    while ($contador < 50) {
        $primo = true;
        for ($j = 2; $j <= $i - 1 && $primo; $j++) {
            if ($i % $j == 0) {
                $primo = false;
            }
        }
        if ($primo) {
            echo "$i ";
            $contador++;
        }
        $i++;
    }*/

    ?>
</body>

</html>