<!DOCTYPE html>
<html lang="en">
<head>
    <title>ejercicio6</title>
</head>

<body>
    <form method="GET" action="">
        <label for="">Ingrese numero</label>
        <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
<?php
$numero = $_GET['numero'] ?? "";
echo "El numero $numero ";
echo validarprimo($numero);



function validarprimo($numero)
{
    $contador = 0;

    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $contador++;
        }
    }
    if ($contador <= 2) {
        echo "es primo";
    } else {
        echo "no es primo";
    }
}


