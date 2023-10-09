<?php
echo "<h1>Ejemplo 1</h1>";
    $i = 1;
    do {
        echo $i."<br>";
        $i++;
    } while ($i <= 10);
?>

<?php
echo "<h1>Ejemplo 2</h1>";
    $i = 1;
    while ($i <= 10) {
        echo $i."<br>";
        $i++;
    } ;
?>

<?php
echo "<h1>Ejemplo 3</h1>";
    $i = 1;
    while ($i <= 10):
        echo $i++;
    endwhile;
?>
