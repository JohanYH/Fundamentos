<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cuadrado.php" method="post">
        <label>Perimetro de un cuadrado</label>
        <br>
        <br>
        Valor de los Lados del cuadrado<input type="number" name="lado">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    
    $lado = $_POST["lado"];

    $total = $lado + $lado + $lado + $lado;

    echo"El perimetro del cuadrado es {$total}";

?>

