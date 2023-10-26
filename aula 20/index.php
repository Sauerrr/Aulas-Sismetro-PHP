<?php



function fibonacci($p){
    $sequencia = array();
    $sequencia[0] = 1;
    $sequencia[1] = 1;

    for($i = 2; $i < $p; $i++){
        $sequencia[$i] =  $sequencia[$i-1] + $sequencia[$i - 2];
    }

    return $sequencia[$p-1];
}

echo fibonacci(30);
?>