<?php
$cantidad= 5;
function llenarelarray(&$matriz){
    global $cantidad;
    for ($i=0;$i<$cantidad;$i++)
        for ($j=0;$j<$cantidad;$j++)
            $matriz[$i][$j] = $i * $j;

}

$arreglo=array();
llenarelarray($arreglo);
    for ($i=0;$i<$cantidad;$i++)
        for ($j=0;$j<$cantidad;$j++)
        echo "Fila: $i Resultado: ".$arreglo[$i][$j]."<br>";
