<?php
$arreglo = array(1,2,3,4,5);
echo "antes <br>";
print_r($arreglo);
echo "<br>";
$cantidad = count($arreglo);
$contador = 0;
$i = $cantidad-1;

while ($i > $contador) {
    $temporal = $arreglo[$contador];
    $arreglo[$contador] = $arreglo[$i];
    $arreglo[$i] = $temporal;
    $contador++;
    $i--;
}
echo "despues <br>";
print_r($arreglo);