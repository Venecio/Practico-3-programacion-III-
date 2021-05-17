
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ejercicio 8 </title>
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
//Hacer un programa que rellene un arreglo con los primeros 10 números primos

$numero = $_GET['numero'] ?? "";

function validarprimo($numero)
{
    $contador = 0;

    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $contador++;
        }
    }
    if ($contador == 2) {
        return true; //primo
    } else {
        return false; //no primo
    }
}

for($i=1;$i<=10;$i++){
    if(validarprimo($i)){
        echo $i. "<br>";
    }
}





 
