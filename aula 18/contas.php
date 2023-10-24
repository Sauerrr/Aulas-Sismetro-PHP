<?php
    $a = 15;
    $b = 2.7;
    $soma = $a + $b;
    echo $soma."<br>";

    $subtracao = $a - $b;
    echo $subtracao."<br>";

    $divisao = $a / $b;
    echo $divisao."<br>";

    $multiplicacao = $a * $b;
    echo $multiplicacao."<br>";

    if($soma < 10){
        echo "Soma menor que 10 <br/>";
    }else{
        echo "Soma maior ou igual que 10 <br/>";
    }

    if($subtracao > 20){
        echo "Subtração maior que 20 <br/>";
    }elseif($subtracao == 10){
        echo "subtração igual a 20 <br/>";
    }else{
        echo "subtração menor que 20<br/>";
    }

    $v = 10;

    switch($v){
        case 10:
         echo "oi";
        break;
        case 9:
        echo "ola";
        break;
        case 8:
        echo "bom dia";
        break;
        case 7:
        echo "boa tarde";
        break;
        default:
        echo "OI";
    }
?>