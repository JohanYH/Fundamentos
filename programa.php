<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <h1>Programa Final De PHP</h1>
    <form action="programa.php" method="post">
		<label for="numero">Ingrese un número:</label>
		<input type="number" id="numero" name="numero">
		<input type="submit" name="ejecutar" value="Agregar número"><br><br>
    <label> Mostrar resultados de numeros enviados</label>
		<input type="submit" name="ejecutar2"><br><br>
    </form>
</body>
</html>

<?php
			session_start();
				if ($_POST["ejecutar"]) {
					$numero = $_POST["numero"];
					if ($numero != 0) {  
						array_push($_SESSION["numeros"], $numero); 
					}
                    
				}
                else if ($_POST["ejecutar2"]) {
					$numeros = $_SESSION["numeros"]; 
					$suma = array_sum($numeros);
					$promedio = count($numeros) > 0 ? $suma / count($numeros) : 0;
					$mayor = max($numeros);
					$menor = min($numeros);
					$contador = count($numeros);

					echo "<h2>Resultados:</h2>";
					echo "<p>La sumatoria de los valores es: {$suma}</p>";
					echo "<p>El valor del promedio es: {$promedio}</p>";
					echo "<p>Se ingresaron {$contador} valores</p>";
					echo "<p>El mayor valor es: {$mayor}</p>";
					echo "<p>El menor valor es: {$menor}</p>";
				}
                else {
                    $_SESSION["numeros"] = []; 
                    }
?>