<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Formulario con Arrays</title>
    <?php require "../funciones/tipos_iva.php"?>
    <?php require "../funciones/irpf.php"?>
</head>
<body>

    <h2>Formulario IVA</h2>
<form action="" method="post">
    <label>Precio: </label>
    <input type="number" name="precio" step="0.1"><br></br>
    <select name="iva">
        <option value="GENERAL">General</option>
        <option value="REDUCIDO">Reducido</option>
        <option value="SUPERREDUCIDO">Superreducido</option>
        <option value="SIN IVA">Sin IVA</option>

    </select>
</form>

    <h2>Formulario IRPF</h2>

    <form action="" method="post">
        <label>Salario: </label>
        <input type="number" step="1000" name="salario"><br><br>
        <input type="hidden" step="action" name="irpf"><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST["action"] == "irpf"){
        $salario = (float) $_POST["salario"];
        echo "<h3>". salarioSinIRPF($salario) ."</h3>";
    }
}
?>
</body>
</html>