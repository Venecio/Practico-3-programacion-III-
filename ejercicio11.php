<?php
$arreglo1=array(1,2,3,4,5,6,7,8,9,10);
$arreglo2=array();
$contador=0;
$cantidad=count($arreglo1);
for ($i=$cantidad-1;$i>=0; $i--){
    $arreglo2[$contador] = $arreglo1[$i];
    $contador++;
}

print_r($arreglo1);
echo "<br>";
print_r($arreglo2);