<?php
$cantidad= 5;
function llenarelarray(&$arreglo2){
    global $cantidad;
    for ($i=0;$i<$cantidad;$i++)
        for ($j=0;$j<$cantidad;$j++)
            $arreglo2[$i][$j] = $i * $j;

}

$arreglo=array();
llenarelarray($arreglo);
print_r($arreglo);
