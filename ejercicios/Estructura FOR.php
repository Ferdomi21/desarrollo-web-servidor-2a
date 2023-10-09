<?php
    echo "<h1>Estructura FOR: Ejemplo 1</h1>";
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
?>


<?php
    echo "<h1>Ejemplo 2</h1>";
    for ($i = 1; ; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
    }
?>

<?php
    for ($i = 1; $i <= 50 ; $i++):
        if ($i % 3 == 0) {
            echo $i."<br>";
        }
    endfor;
?>


    for ($i = 1; $i <= 50 ; $i++):
        if (($i % 3 == 0) || (($i % 5 == 0))
        //&& (($i % 6 == 0)):
            //echo $i."<br>";
    //endfor;