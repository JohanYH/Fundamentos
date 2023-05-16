<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo"<h1>titulo con html generado de php</h1>";
        echo phpversion();
        echo phpinfo();
            // 1. Variables
        $variable = "Hello Worlds Fantasy";
        echo $variable;

        /* 2. Errores */
        //2.1 Parse error: syntax error
        $variable = "Hello Worlds fantasy,";
        echo $variable;

        //2.2 warning:
        echo $variablekjsdjsd;
        echo " Esto si se debe ejecutar";

        //2.3 Fatal error
        /* sdsdsd; */
    ?>
</body>
</html>