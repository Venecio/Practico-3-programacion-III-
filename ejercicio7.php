<!DOCTYPE html>
<html lang="en">

<head>
    <title>ejercicio 7 </title>
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

function validarprimo($numero)
{
    $contador = 0;

    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $contador++;
        }
    }
    if ($contador > 2) {
        return true; //no es primo
    } else {
        return false; //es primo
    }
}
if (validarprimo($numero)) {
    $contador = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $contador++;
        }

        if ($contador > 2) {
            $numero = $numero + 1;
            $contador = 0;
            $i = 0;
        }
    }
    echo $numero;
} else {
    echo  $numero;
}
