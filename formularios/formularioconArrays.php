<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Formulario con Arrays</title>
</head>
<body>
    <?php
    $productos = [
        ["Camel", 5.25, 10],
        ["Chuletitas de cordero", 8, 6],
        ["Helado Kalise", 1.5, 7]
    ];
    ?>

    <form action="" method="post">
    <fieldset>
        <label>Producto</label>
        <input type="text" name="nombre_producto"><br><br>
        <label>Precio</label>
        <input type="number" step="0.1" name="precio"><br><br>
        <label>Cantidad</label>
        <input type="number" step="1" name="cantidad"><br><br>
        <input type="submit" value="Insertar">
    </fieldset>

    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre_producto = $_POST["nombre_producto"];
        $precio = (float) $_POST["precio"];
        $cantidad = (int) $_POST["cantidad"];

        $nuevo_producto = [$nombre_producto, $precio, $cantidad];
        array_push($productos, $nuevo_producto);
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($productos as $producto) {
                list($nombre_producto, $precio, $cantidad) = $producto;
                echo "<tr>";
                echo "<td>$nombre_producto</td>";
                echo "<td>$precio</td>";
                echo "<td>$cantidad</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>