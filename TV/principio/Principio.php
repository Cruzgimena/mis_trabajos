<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/hippoP.svg"  type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Mi primer trabajo</title>
</head>
<body>
    <form action="Principio.php" method="post">

        <fieldset>
            <legend>Operaciones</legend>
                <input type="number" name="num1" id=""> <br>
                <input type="number" name="num2" id=""> <br>
                <input type="submit" value="Operaciones"> <br>
        </fieldset>
        
    </form>
</body>
</html>
<?php
    $mensaje = "Victoria";
    echo "<H2>Bienvenidos a mi Programa</H2>";
    echo "<H1>Soy Gimena ".$mensaje."</H1>";
    //INICIALIZO Y DEFINO LA VARIABLE NUM1.
    $num1 = 25;
    /*
        La estructura while me va
         a mostrar los nùmero desde 25 al 30
    
    
    while ($num1 <= 30) {
        echo "El número ".$num1.' es menor a 30<BR><BR>';
        // cUENTO DE 1 EN UNO
        $num1++;

    }*/

    if ($_POST) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2']; 

        echo 'La suma es: '. $num1 + $num2;
        echo '<Br>La resta es: '. $num1 - $num2;
        echo '<Br>La division es: '. $num1 / $num2;
        echo '<Br>La multiplicacion es: '. $num1 * $num2;
    }


?>

