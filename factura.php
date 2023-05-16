<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="factura.php" method="post">
    <select name="crypto" id="">
        <option value="">Seleccione la CriptoMoneda</option>
        <option value="BitCoin">BitCoin</option>
        <option value="SOL">SOL</option>
        <option value="DogeCoin">DogeCoin</option>
        <option value="XPR">XPR</option>
    </select>
    <label for="">Cantidad</label>
    <input type="number" name="cantidad">
    <label for="">Precio</label>
    <input type="number" name="precio">
    <input type="submit" name="comprar">
    </form>
</body>
</html>

<?php
    echo " adquiriste {$_POST["crypto"]}";
    echo " {$_POST["cantidad"]} <br>";
    echo " {$_POST["precio"]} <br>";
    $total = $_POST["cantidad"] * $_POST["precio"];
    echo " El total de tu compra fue de {$total} <br>"
?>