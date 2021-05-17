<?php
$cantidad= 5;
function llenarelarray(&$matriz){
    global $cantidad;
    for ($i=0;$i<$cantidad;$i++)
        for ($j=0;$j<$cantidad;$j++)
            $matriz[$i][$j] = $i * $j;

}
function diagonal(&$matriz){
    global $cantidad;
    for ($i=0;$i<$cantidad;$i++)
        echo $matriz[$i][$i]."<br>";
    
}
$arreglo=array();
llenarelarray($arreglo);
echo "Diagonal <br>";
diagonal($arreglo);