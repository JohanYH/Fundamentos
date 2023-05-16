<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="persona.php" method="post">
        <label>Nombres Y Edades</label>
        <br>
        <br>
        Estudiante <input type="text" name="persona1">
        Edad <input type="number" name="edad">
        <br>
        <br>
        Estudiante 2 <input type="text" name="persona2">
        Edad 2 <input type="number" name="edad2">
        <br>
        <br>
        Estudiante 3 <input type="text" name="persona3">
        Edad 3 <input type="number" name="edad3">
        <br>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php
    $estudiante1 = $_POST["persona1"];
    $edad = $_POST["edad"];
    $estudiante2 = $_POST["persona2"];
    $edad2 = $_POST["edad2"];
    $estudiante3 = $_POST["persona3"];
    $edad3 = $_POST["edad3"];
    $mayor = 0;
    $personaMayor = "";

    if ($edad > $mayor) {
        $mayor = $edad;
        $personaMayor = $estudiante1;
    }if ($edad2 > $mayor) {
        $mayor = $edad2;
        $personaMayor = $estudiante2;
    }if ($edad3 > $mayor) {
        $mayor = $edad3;
        $personaMayor = $estudiante3;
    }
    echo "Esta Estudiante {$personaMayor} es mayor por que tiene {$mayor} años de edad"




?>

