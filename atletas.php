<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Juegos Olimpicos</h1>
     <form action="atletas.php" method="post">
       <label>Nombre Del Atleta Y Marca</label> <br> <br>
       Nombre 1 <input type="text" name="nombre1">
       Marca 1 <input type="number" name="marca1">
       <br> <br>
       Nombre 2 <input type="text" name="nombre2">
       Marca 2 <input type="number" name="marca2">
       <br> <br>
       Nombre 3 <input type="text" name="nombre3">
       Marca 3 <input type="number" name="marca3">
       <br> <br>
       <input type="submit"  value="Enviar">
       <br>
     </form>
</body>
</html>

<?php

    $Mayor = 0;
    $Participante_Mayor = "";

    $nombre1 = $_POST['nombre1'];
    $marca1 = $_POST['marca1'];

    $nombre2 = $_POST['nombre2'];
    $marca2 = $_POST['marca2'];

    $nombre3 = $_POST['nombre3'];
    $marca3 = $_POST['marca3'];


    if ($marca1 > $Mayor) {
        $Mayor = $marca1;
        $Participante_Mayor = $nombre1; 

    }if ($marca2 > $Mayor) {
        $Mayor = $marca2;
        $Participante_Mayor = $nombre2;

    }if ($marca3 > $Mayor) {
        $Mayor = $marca3;
        $Participante_Mayor = $nombre3;
    }
    if ($Mayor > 15.50) {
        echo "<br> El participante {$Participante_Mayor} hizo la Marca {$Mayor}, que rompio el Record y se le dara 500M al que Gano Definitivamente";

    }else {
        echo "<br> El participante {$Participante_Mayor} Tiene la Mayor Marca con {$Mayor}";
    }

?>
