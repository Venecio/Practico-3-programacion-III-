<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>

<body>
    <form method="GET">
        <label>Ingrese un numero</label>
        <input type="number" name="numero">
        <input type="submit" value="enviar">
    </form>
</body>

</html>
<?php
//cociente / y resto %
$numero = $_GET['numero'] ?? "";



if (validarpar($numero)) {
    echo "par";
} else {
    echo "impar";
}

function validarpar($numero)
{
    $resto = (int)$numero % 2;
    if ($resto == 0) {
        return true;
    } else {
        return false;
    }
}
