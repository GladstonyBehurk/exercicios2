<?php

function imc($altura, $peso)
{
    $expoente=2;
    $calculo=$peso/(($altura/100)** $expoente);
    
    $calculo=number_format($calculo, 2);

    if ($calculo < 18.5)
    {
        echo "Seu IMC é $calculo". '<br>';
        echo "Sua condição física é Magreza.";  
    }
   
    elseif ($calculo >= 18.5 and $calculo < 24.9)
    {
        echo "Seu IMC é $calculo". '<br>';
        echo "Sua condição física é Normal.";
    }
        
    elseif ($calculo >= 24.9 and $calculo < 30)
    {
        echo "Seu IMC é $calculo". '<br>';
        echo "Sua condição física é Sorepeso.";
    }
    else 
    {
        echo "Seu IMC é $calculo". '<br>';
        echo "Sua condião física é Obesidade.";
    }
}

echo imc(170, 70);