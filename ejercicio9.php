<?php
echo rellenararreglo();
function rellenararreglo()
{
    $arreglo = array();
    for ($i = 0; $i <= 100; $i++) {
        array_push($arreglo, "$i");
        echo "$arreglo[$i]  ";
    }
    echo "<br>";
    $suma = 0;
    $contador = 0;
    while ($contador < 100) {
        $contador++;
        $suma = $suma + $arreglo[$contador];
    }
    echo "RESULTADO -> $suma <br>";
    $contador = 100;
    $multiplicacion = 1;
    while ($contador > 0) {
        $multiplicacion = $multiplicacion * $arreglo[$contador];
        $contador--;
    }
    echo $multiplicacion;
}
