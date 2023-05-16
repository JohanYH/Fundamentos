<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="par_impar.php" method="post">
        <label>Digita un Numero</label>
        <br>
        <br>
        <input type="number" name="dado">
        <br>
        <br>
        <input type="submit" value="enviar">
        <br>
        <br>
    </form>
</body>
</html>

<?php
    $numero = $_POST["dado"];

    if ($numero % 2 == 0 && $numero > 10) {
        echo "El numero {$numero} es Par y Mayor que 10";
    }else if ($numero % 2 == 0 && $numero < 10) {
        echo "El numero {$numero} es Par y Menor que 10";
    } elseif ($numero % 2 == 1 && $numero > 10) {
        echo "El numero {$numero} es Impar y Mayor que 10";
    } elseif ($numero % 2 == 1 && $numero < 10) {
        echo "El numero {$numero} es Impar y Menor que 10";
    }

?>
