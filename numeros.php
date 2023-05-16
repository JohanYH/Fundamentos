<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="numeros.php" method="post">
        <label>Digite los numeros</label>
        <br>
        <br>
        Primer Numero <input type="number" name="numero1">
        <br>
        <br>
        Segundo Numero <input type="number" name="numero2">
        <br>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    if ($numero1 > $numero2) {
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;

        echo "El primer numero es mayor que el segundo <br>";
        echo "La suma de los dos numeros es: {$suma} <br>";
        echo "La diferencia de los numeros es de: {$resta}<br>";

    }else {
        $potencia = $numero1 * $numero2;
        $dividir = $numero1 / $numero2;
        echo "El Segundo numero es mayor que el primer numero <br>";
        echo "La potencia de los numeros es de: {$pontecia}";
        echo "La division de los dos numeros es de: {$dividir}";
    }


?>