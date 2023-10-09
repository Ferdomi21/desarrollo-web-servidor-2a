<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Numero Mayor</title>
    <?php require 'numMayor.php';?>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Numero 1</label>
        <input type="number" step="1" name="num1" id="num1"></br>
        <label for="num2">Numero 2</label>
        <input type="number" step="1" name="num2" id="num2"></br>
        <label for="num3">Numero 3</label>
        <input type="number" step="1" name="num3" id="num3"></br>
        <input type="submit" value="Comprobar">
    </form>
    <?php
    //Busquedas de poca repercusion "GET"
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $num1 = (int) $_POST["num1"];
       $num2 = (int) $_POST["num2"];
       $num3 = (int) $_POST["num3"];
       echo numMayor ($num1, $num2, $num3); 
    }
    ?>
</body>
</html>