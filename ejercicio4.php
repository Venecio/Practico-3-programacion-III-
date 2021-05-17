<!DOCTYPE html>
<html lang="en">

<head>
    <title>ejercicio 4</title>
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
$numero = $_GET['numero'];

while ($numero > 0) {
    $resto= $numero % 10;
    echo $resto . "<br>";
    $numero = (int)($numero / 10);
}
