<?php
    $numero_sorteado = rand(1,99);

    echo $numero_sorteado."<br/>";

    switch($numero_sorteado){
            case 17:
            echo "João ganhou";
            break;
            case 67:
            echo "Leonardo ganhou";
           break;
           case 21:
            echo "Esdras ganhou";
           break;
           case 33:
            echo "Igor ganhou";
           break;
           case 12:
            echo "Manu ganhou";
           break;
           case 7:
            echo "Vini ganhou";
           break;
           case 4:
            echo "Julia M. ganhou";
           break;
           case 69:
            echo "Thales ganhou";
           break;
           case 60:
            echo "Cauã ganhou";
           break;
           case 75:
            echo "Julia Z. ganhou";
           break;
           default:
           echo "ninguém ganhou!";
    }
?>