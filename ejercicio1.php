<html>

<head>
    <title>Ejercicio 1 SumaNumeros</title>
</head>

<body>
    <form method="GET" action="">
        <label>Primer numero</label>
        <input type="number" name="numero1">
        <label>Segundo numero</label>
        <input type="number" name="numero2">
        <input type="submit" value="enviar">
    </form>
</body>

</html>

<?php

$numero1 = $_GET['numero1'] ?? "";
$numero2 = $_GET['numero2'] ?? "";

function sumarnumeros($numero1, $numero2){
    
    return $numero1 + $numero2;
}

echo "El resultado de la suma de $numero1 + $numero2 es =  ".sumarnumeros($numero1, $numero2);