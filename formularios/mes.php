<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Mes</title>
</head>
<body>
    <form action="" method="post">
        <label>Introduzca la cantidad de la factura de la luz</label>
        <br>
        <input type="text" name="luz">
        <br><br>
        <label>Introduza la cantidad de la factura del agua</label>
        <br>
        <input type="text" name="agua">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    //Busquedas de poca repercusion "GET"
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h3>Formulario enviado!</h3>";
        $luz = $_GET["luz"];
        $agua = $_GET["agua"];
        define("alquiler", 363.00);
        echo "<h4>$nombre $apellidos</h4>";
    }
    ?>
</body>
</html>