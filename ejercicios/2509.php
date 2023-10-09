<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 25/09/23</title>
    <link rel="stylesheet" href="miEstilo.css">
</head>

<body>
    <?php
    //Mostrar en lista. Luego ponerlo en una tabla
    $array3 = [
        '53703282F' => 'Victor M',
        '76752427R' => 'Fernando D',
        '85296374E' => 'Paco Porras'
    ];

    foreach ($array3 as $names) {
        echo "<li>$names</li><br>";
    }
    ?>

    <ul>
        <?php
        foreach ($array3 as $id => $names) {
            echo "Este " . $id . " pertenece a " . $names . "<br>";
        }
        ?>
    </ul>
    <h1>Tabla inicial</h1>
    <table border=2>
        <thead>
            <tr>
                <td>DNIs</td>
                <td>Nombre</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($array3 as $id => $names) {
                echo "<tr> <td>$id</td> <td>$names</td> </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
<h2>Tabla ordenada con metodo SORT()</h2>
<table border=2>
    <thead>
        <tr>
            <td>DNIs</td>
            <td>Nombre</td>
        </tr>
    </thead>
    <tbody>
        <?php
        sort($array3);
        foreach ($array3 as $id => $names) {
            echo "<tr> <td>$id</td> <td>$names</td> </tr>";
        }
        ?>
    </tbody>
</table>
</body>

<h2>Tabla ordenada con metodo RSORT()</h2>
<table border=2>
    <thead>
        <tr>
            <td>DNIs</td>
            <td>Nombre</td>
        </tr>
    </thead>
    <tbody>
        <?php
        rsort($array3);
        foreach ($array3 as $id => $names) {
            echo "<tr> <td>$id</td> <td>$names</td> </tr>";
        }
        ?>
    </tbody>
</table>
</body>
<h2>Tabla ordenada con metodo ASORT()</h2>
<table border=2>
    <thead>
        <tr>
            <td>DNIs</td>
            <td>Nombre</td>
        </tr>
    </thead>
    <tbody>
        <?php
        asort($array3);
        foreach ($array3 as $id => $names) {
            echo "<tr> <td>$id</td> <td>$names</td> </tr>";
        }
        ?>
    </tbody>
</table>
</body>

<h2>Tabla ordenada con metodo ARSORT()</h2>
<table border=2>
    <thead>
        <tr>
            <td>DNIs</td>
            <td>Nombre</td>
        </tr>
    </thead>
    <tbody>
        <?php
        arsort($array3);
        foreach ($array3 as $id => $names) {
            echo "<tr> <td>$id</td> <td>$names</td> </tr>";
        }
        ?>
    </tbody>
</table>
</body>

<h2>Tabla ordenada con metodo KSORT()</h2>
<table border=2>
    <thead>
        <tr>
            <td>DNIs</td>
            <td>Nombre</td>
        </tr>
    </thead>
    <tbody>
        <?php
        ksort($array3);
        foreach ($array3 as $id => $names) {
            echo "<tr> <td>$id</td> <td>$names</td> </tr>";
        }
        ?>
    </tbody>
</table>
</body>

<h2>Tabla ordenada con metodo KRSORT()</h2>
<table border=2>
    <thead>
        <tr>
            <td>DNIs</td>
            <td>Nombre</td>
        </tr>
    </thead>
    <tbody>
        <?php
        krsort($array3);
        foreach ($array3 as $id => $names) {
            echo "<tr> <td>$id</td> <td>$names</td> </tr>";
        }
        ?>
    </tbody>
</table>
</body>
<?php

//Array Multidimensional
$juegos = [
    ["Pacman", "Atari", 60],
    ["Fornite", "PS4", 0],
    ["Mario Kart", "Super Nintendo", 70],
    ["Street Fighter", "PS4", 50],
    ["Legend Of Zelda", "Nintendo 64", 40],
    ["Castlevania", "Nintendo 64", 55]
];
?>
<h2>Tabla con Array Multidimensional</h2>
<table border=2>
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Consola</td>
            <td>Precio</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($juegos as $juego) {
            list($name, $console, $price) = $juego;

            echo "<tr><td>$name</td>";
            echo "<td>$console</td>";
            echo "<td>$price</td></tr>";
        }

        $name = array_column($juegos, 0);
        $console = array_column($juegos, 1);
        $price = array_column($juegos, 2);
        //array_multisort() metodo para poder ordenar una array multidimensional. Pasamos por parametros los campos a ordenar y si queremos que sea ascendente (ASC) o descendente (DSC)
        array_multisort($console, SORT_ASC, $name, SORT_ASC, $juegos);
        ?>


        <table border=2>
            <thead>
                <h2>Tabla con Array Multidimensional con nueva columna Stock</h2>
                <tr>
                    <td>Nombre</td>
                    <td>Consola</td>
                    <td>Precio</td>
                    <td>Stock</td>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($juegos); $i++) {
                    $juegos[$i][3] = rand(1, 10);
                }
                foreach ($juegos as $juego) {
                    list($name, $console, $price, $stock) = $juego;

                    echo "<tr><td>$name</td>";
                    echo "<td>$console</td>";
                    echo "<td>$price</td>";
                    echo "<td>$stock</td></tr>";
                }
                ?>
            </tbody>

</html>