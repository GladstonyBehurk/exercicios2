<?php

function somar ($numero1, $numero2)
{

    $resultado = $numero1 + $numero2;
    
if ($resultado > 0)
    return $resultado;
else
    echo 0;

}
echo somar(1,5) . '<br>';
echo somar(1,-5) . '<br>';
