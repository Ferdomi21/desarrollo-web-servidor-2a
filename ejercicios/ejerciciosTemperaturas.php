<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de temperaturas</title>
</head>

<body>
    <?php
    /*
    Para convertir de ºC a ºF use la fórmula:   ºF = ºC x 1.8 + 32.
    Para convertir de ºF a ºC use la fórmula:   ºC = (ºF-32) ÷ 1.8.
    Para convertir de K a ºC use la fórmula:   ºC = K – 273.15
    Para convertir de ºC a K use la fórmula: K = ºC + 273.15.
    Para convertir de ºF a K use la fórmula: K = 5/9 (ºF – 32) + 273.15.
    Para convertir de K a ºF use la fórmula:   ºF = 1.8(K – 273.15) + 32.
    */
    echo "<strong>1 - Celcius a Fahrenheit</strong>";
    function celsiusTofarenheit(int|float $celsius): float
    {

        return ($celsius * 9 / 5) + 32;

    }
    $resultado = celsiusTofarenheit(15);
    echo "<br></br>";
    echo "$resultado";

    $resultado = celsiusTofarenheit(15);

    echo "<br></br>";
    echo "<strong>2 - Fahrenheit a Celsius</strong>";
    function farenheitTocelsius(int|float $temperatura): float
    {

        return ($temperatura - 32) / 1.8;
    }

    $resultado = farenheitTocelsius(15);
    echo "<br></br>";
    echo "$resultado";
    echo "<br></br>";

    echo "<strong>3 - Celsius a Kelvin</strong>";
    function celsiusTokelvin(int|float $temperatura): float
    {
        return ($temperatura + 273.15);
    }

    $resultado = celsiusTokelvin(15);
    echo "<br></br>";
    echo "$resultado";
    echo "<br></br>";

    echo "<strong>4 - Kelvin a Celsius</strong>";
    function kelvinTocelsius(int|float $temperatura): float
    {
        return ($temperatura - 273.15);
    }

    $resultado = kelvinTocelsius(15);
    echo "<br></br>";
    echo "$resultado";
    echo "<br></br>";

    echo "<strong>5 - Kelvin a Fahrenheit</strong>";
    function kelvinTofah(int|float $temperatura): float
    {
        return 1.8 * ($temperatura - 273.15) + 32;
    }

    $resultado = kelvinTofah(15);
    echo "<br></br>";
    echo "$resultado";
    echo "<br></br>";

    echo "<strong>6 - Fahrenheit a Kelvin</strong>";
    function fahTokelvin(int|float $temperatura): float
    {
        return 5 / 9 * ($temperatura - 32) + 273.15;
    }

    $resultado = fahTokelvin(15);
    echo "<br></br>";
    echo "$resultado";
    echo "<br></br>";


    function convertirTemperatura(int | float $temperatura, $tmpOriginal, $tmpFinal) : int | float {
        $convertir = match(true){
            $tmpOriginal == "C" && $tmpFinal == "F" =>  celsiusTofarenheit($temperatura),
            $tmpOriginal == "F" && $tmpFinal == "C" =>  farenheitTocelsius($temperatura),
            $tmpOriginal == "C" && $tmpFinal == "K" =>  celsiusTokelvin($temperatura),
            $tmpOriginal == "K" && $tmpFinal == "C" =>  kelvinTocelsius($temperatura),
            $tmpOriginal == "K" && $tmpFinal == "F" =>  kelvinTofah($temperatura),
            $tmpOriginal == "F" && $tmpFinal == "K" =>  fahTokelvin($temperatura),
            default => "Error"
        };
        return $convertir;
    }













    ?>


</body>

</html>