<?php

function somar ($n1, $n2)
{

    $resultado = $n1 + $n2;
    
if ($resultado >=19 and $n1 >7 and $n2 >7)
    echo "Aluno aprovado";
else
    echo "Aluno reprovado";

}
echo somar(50,80) .'<br>';
echo somar(8,10) .'<br>';