<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <label for="products">Productos: </label>
        <input type="text" step="1" name="products" id="products"></br>
        <label for="price">Precio: </label>
        <input type="number" step="0.1" name="price" id="price"></br>
        <label for="price">Cantidad: </label>
        <input type="number" step="1" name="amount" id="amount"></br>
        <input type="submit" value = "Insertar">
        <table>
  <tr>
    <th>Producto</th>
    <th>Precio</th>
    <th>Cantidad</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table> 
</body>
</html>

<?php

$productos = [
    ["Leche", "0.95", 3],
    ["Jamon serrano", "1.95", 2],
    ["Agua", "0.65", 5]
];






?>
