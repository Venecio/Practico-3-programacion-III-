<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <form method="GET" action="">
        <label >Ingrese primer numero</label>
        <input type="number" name="numero1">
        <label >Ingrese segundo numero</label>
        <input type="number" name="numero2">
        <label >Ingrese simbolo de operacion</label>
        <input type="simbol" name="sim_operacion" placeholder="+ - * /">
        <input type="submit">


    </form>
</body>

</html>
<?php
$numero1=$_GET['numero1'];
$numero2=$_GET['numero2'];
$sim_operacion=$_GET['sim_operacion'];


function sumarnumeros($numero1,$numero2,$sim_operacion){
    switch($sim_operacion){

        case "+": 
            $suma=$numero1 + $numero2;
            return $suma;
            break;
        case "-":  
            $resta=$numero1 - $numero2;
            return $resta;
            break;
        case "*":
            $multiplicacion=$numero1 * $numero2;
            return $multiplicacion;
            break;
        case "/":
            $division=$numero1 / $numero2;
            if($numero2==0){
                echo "No se puede dividir por cero";
            }else{
                return $division;   
            }
        default:
            echo "Operador no existente/agregado";
            break;    
    }

}
echo "El resultado de $numero1 $sim_operacion $numero2 es = " .sumarnumeros($numero1,$numero2,$sim_operacion);