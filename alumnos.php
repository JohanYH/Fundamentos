<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="alumnos.php" method="post">
        <label>Notas del Estudiante</label>
        <br>
        Nota 1<input type="number" name="alumno1">
        Nota 2<input type="number" name="alumno2">
        Nota 3<input type="number" name="alumno3">
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php
    $nota1 = $_POST["alumno1"];
    $nota2 = $_POST["alumno2"];
    $nota3 = $_POST["alumno3"];

    $total = $nota1 + $nota2 + $nota3;

    $promedio = $total / 3;

    if ($promedio <= 3.9) {
        echo "Cual es esa Nota? Mejor Pongase a Estudiar Camper <br>";
    }else {
        echo"Felicidades tienes una notas mas que el otro Promedio Pasas el Filtro <br>";
    }
    echo $promedio;
?>