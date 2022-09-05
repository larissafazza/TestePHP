<!-- Algoritmo em PHP para calcular a soma dos valores do array $valores = array(1,3,5,9,12,10); -->

<?php
    $valores = array(1,3,5,9,12,10);
    $soma = 0;

    echo "$"."valores = array(";
    foreach($valores as $proxValor){
        $soma = $soma + $proxValor;
        echo $proxValor . " ";
    }

    echo ")" . " => Soma = ". $soma;
?>