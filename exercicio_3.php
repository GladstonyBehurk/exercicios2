<?php

function salario1 ($salario1, $reajuste1)
{

$acrescimo1= $salario1 * ($reajuste1 / 100);
$salario=$salario1  + $acrescimo1;
echo "Salário reajustado em 50% de R$ $salario1,00 para R$ $salario,00.";

}
echo salario1 (3000,50) .'<br>';


function salario2 ($salario2, $reajuste2)
{

$acrescimo2= $salario2 * ($reajuste2 / 100);
$salario=$salario2  + $acrescimo2;
echo "Salário reajustado em 30% de R$ $salario2,00 para R$ $salario,00.";

}
echo salario2 (3800,30) .'<br>';
