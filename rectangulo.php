<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="rectangulo.php" method="post">
        <label>Area de un Rectangulo</label>
        <br>
        <br>
        Base de un rectangulo <input type="number" name="base">
        Altura de un rectangulo <input type="number" name="altura">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


<?php
    $base = $_POST["base"];
    $altura = $_POST["altura"];

    $total = $base * $altura;

    echo "El Area de un rectangulo es de {$total}";

?>