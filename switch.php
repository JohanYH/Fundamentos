<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
        <!-- <label>Digite el Limite del contador</label>
        <input type="number" name="counter">
        <input type="submit" value="enviar"> -->
    </form>
    <?php
        //1. IF CONDICIONAL

        /* $salario = 900000;
        $No_Subsidio_Msg = "Usted (NO) tiene derecho a subsidio";
        $Si_SUbsidio_Msg = "Usted (SI) tiene derecho a subsidio";
        if ($salario >= 5000000) {
            echo $No_Subsidio_Msg;
        }elseif ($salario >= 300000) {
            echo $Si_SUbsidio_Msg;
        }else {
            echo "Usted tiene derecho a un subsidio de vivienda";
        } */

        /* $temperatura = 15;
        if ($temperatura < 0 || $temperatura > 30) {
            echo "El clima no es favorable";
        }else {
            echo"El clima es Bueno";
        } */


        //2. SWITCH

       /*  $hora = "08:00 A.M";

        switch ($hora) {
            case '06:00 A.M.':
                echo "Camper, Tienes Software Skill";
                break;
            case '08:00 A.M.':
                echo "Camper, Tienes Break, Pausa Activa";
                break;
            
            case '10:00 A.M.':
                echo "Camper, Tienes Clase con Ingles Teacher";
                break;
            case '12:00 A.M.':
                echo "Camper, Almuerza";
                break;
            case '02:00 P.M.':
                echo "Camper, Tienes Software Review";
                break;                       
            default:
                echo "Camper, Descansa";
                break;
        } */

        //FOR CICLO REPETITIVO (repite codigo un numero determinado de veces)

        /* if ($_POST) {
            $counter = $_POST["counter"];
            for ($i=1; $i <= $counter; $i++) { 
                echo $i . "<br>";
            }
        } */


        //4. WHILE - CLICLO REPETITIVO (repite codigo mientras se cumpla una condicion)

       /*  while ($contador <= 20) {
            $contador++;
            echo $contador . "<br>";
        } */

       /*  $comida = array('Panzerotti', "Sushi", "Sopa", "Pescado");

        echo $comida[0]. "<br>";
        echo $comida[1]. "<br>";
        echo $comida[2]. "<br>";
        echo $comida[3]. "<br>";

        echo "<br>";

        array_push ($comida, "Camarones"); //Añade al final
        array_pop ($comida); //Eliminar al final
        array_shift ($comida); //Elimina al comienzo

        foreach ($comida as $bocado) {
            echo $bocado . "<br>";
        } */
    ?>
</body>
</html>

