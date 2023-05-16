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
            //Aritmetics Operators
            // + - * / ** %

            $x = 20;
            $y = 3;
            $z = null;

        /*   $z = $x + $y; */
        /*  $z = $x - $y; */
            /* $z = $x * $y; */
            /* $z = $x / $y; */
            /* $z = $x ** $y; */
        /*  $z = $x % $y; */

            echo $z;

            // 2. Increment / Descrement Operartors
            // ++ --
            
            $counter = 10;
        /*  $counter = $counter + 1; */
        /* $counter++; */
        /* $counter--; */

        // En 2 o mas valores
            /* $counter += 2; */
            $counter -= 2;

            echo $counter;

            //3. Jerarquia - precendence
            //1. ()
            //2. **
            //3. * / %
            //4. + -

            $total = 4 + 6 * 2;
            echo "<br> {$total}"


        ?>
</body>
</html>