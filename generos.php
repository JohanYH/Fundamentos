<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="generos.php" method="post">
        <label>Hombres Y Mujeres</label>
        <br>
        <br>
        Estudiante <input type="text" name="estudiante1">
        <select name="genero1" id="">
            <option value="">Seleccione el Genero</option>
            <option value="F">F</option>
            <option value="M">M</option>
        </select>
        Nota <input type="number" name="nota1">
        <br>
        <br>
        Estudiante <input type="text" name="estudiante2">
        <select name="genero2" id="">
            <option value="">Seleccione el Genero</option>
            <option value="F">F</option>
            <option value="M">M</option>
        </select>
        Nota <input type="number" name="nota1">
        <br>
        <br>
        Estudiante <input type="text" name="estudiante3">
        <select name="genero3" id="">
            <option value="">Seleccione el Genero</option>
            <option value="F">F</option>
            <option value="M">M</option>
        </select>
        Nota <input type="number" name="nota3">
        <br>
        <br>
        <input type="submit" value="Enviar">
        <br>
        <br>
    </form>
</body>
</html>


<?php
    $hombres = 0;
    $mujeres = 0;
    $estudiante1 = $_POST["estudiante1"];
    $estudiante2 = $_POST["estudiante2"];
    $estudiante3 = $_POST["estudiante3"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $genero1 = $_POST["genero1"];
    $genero2 = $_POST["genero2"];
    $genero3 = $_POST["genero3"];
    $NotaMayor = 0;
    $NotaMenor = 999999;
    $estudianteNotaMayor = "";
    $estudianteNotaMenor = "";


    if ($nota1 > $NotaMayor) {
        $NotaMayor = $nota1;
        $estudianteNotaMayor = $estudiante1;
    }if ($nota2 > $NotaMayor) {
        $NotaMayor = $nota2;
        $estudianteNotaMayor = $estudiante2;
    }if ($nota3 > $NotaMayor) {
        $NotaMayor = $nota3;
        $estudianteNotaMayor = $estudiante3;
    }
    if ($nota1 < $NotaMenor) {
        $NotaMenor = $nota1;
        $estudianteNotaMenor = $estudiante1;
    }
    if ($nota2 < $NotaMenor) {
        $NotaMenor = $nota2;
        $estudianteNotaMenor = $estudiante2;
    }
    if ($nota3 < $NotaMenor) {
        $NotaMenor = $nota3;
        $estudianteNotaMenor = $estudiante3;
    }
    if ($genero1 === "M") {
        $hombres++;
    }
    if ($genero2 === "M") {
        $hombres++;
    }
    if ($genero3 === "M") {
        $hombres++;
    }
    if ($genero1 === "F") {
        $mujeres++;
    }
    if ($genero2 === "F") {
        $mujeres++;
    }
    if ($genero3 === "F") {
        $mujeres++;
    }



    echo "<br> El Estudiante {$estudianteNotaMayor} tiene la Mayor Nota Definitiva con {$NotaMayor}";
    echo "<br> El Estudiante {$estudianteNotaMenor} tiene la Menor Nota Definitiva con {$NotaMenor}";
    echo "<br> La cantidad de hombres son desde {$hombres} y la cantidad de mujeres son desde {$mujeres}"

?>