<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="articulos.php" method="post">
        <label>Articulos</label>
        <br>
        <br>
        Nombre Del Articulo <input type="text" name="articulo">
        Precio <input type="number" name="precio">
        Cantidad <input type="number" name="cantidad">
        <br>
        <br>
        <input type="submit" value="enviar">
        <br>
        <br>
    </form>
</body>
</html>

<?php

    $nombre = $_POST["articulo"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $total = $precio * $cantidad;
    
    echo "El Articulo que Compro el Cliente es {$nombre} <br>";
    echo "La cantidad del Articulo que compro es {$cantidad} y su precio es {$precio} <br>";
    echo "Compraste {$nombre} y el precio de total del articulo es {$total}";


?>