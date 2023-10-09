<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios potencia</title>
</head>
<body>
    <?php

    function potencia (int $numBase, $numExp) : int {
        $total = 1;
        for ($i = 0; $i <= $numExp; $i++){
            $total *= $numBase;
        }
        return potencia();
    }






    ?>
</body>
</html>