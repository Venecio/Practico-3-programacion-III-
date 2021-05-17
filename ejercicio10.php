<?php
$cantidad=5;
$arreglo = array(1,2);
    for($i = 2; $i<$cantidad; $i++)
    $arreglo[$i] = $arreglo[$i-2] + $arreglo[$i-1];
    
    print_r($arreglo);
?>