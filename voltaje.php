<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="voltaje.php" method="post">
        <label>Determinar el Voltaje</label>
        <br>
        <br>
        Resistencia <input type="number" name="resistencia">
        Intensidad <input type="number" name="intensidad">
        <br>
        <br>
        <input type="submit" value="enviar">
        <br>
        <br>
    </form>
</body>
</html>

<?php

    $intensidad = $_POST["intensidad"];
    $resistencia = $_POST["resistencia"];

    $voltaje = $intensidad * $resistencia;

    echo "El voltaje es de {$voltaje}"

?>

