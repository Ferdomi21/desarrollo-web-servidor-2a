<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejemplo formulario</title>
</head>
<body>
    <form action="" method="post">
        <label>Nombre</label>
        <br>
        <input type="text" name="nombre">
        <br><br>
        <label>Apellidos</label>
        <br>
        <input type="text" name="apellidos">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    //Busquedas de poca repercusion "GET"
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h3>Formulario enviado!</h3>";
        $nombre = $_GET["nombre"];
        $apellidos = $_GET["apellidos"];
        echo "<h4>$nombre $apellidos</h4>";
    }
    ?>
</body>
</html>