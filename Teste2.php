<!-- O algoritmo recebe a data em formato brasileiro através do parâmetro da url,
e calcula a quantidade de dias passados desde o início do ano até a data atual. -->

<?php
    $result = $_GET['data'];
    echo "Hoje é dia " . $result . " \n";
    $mes = substr($result, 3, 2);
    $mes = intval($mes);
    $dia = substr($result, 0, 2);
    $dia = intval($dia);
    $dias = 0;
    
    if($mes <= 7){
        if($mes%2!=0){
            $dias = (($mes-1)/2)*30 + (($mes-1)/2)*31 + $dia;
        }
        else{
            $dias = ($mes/2 - 1)*30 + ($mes/2)*31 + $dia;
        }
    }

    else{
        if($mes%2!=0){
            $dias = (($mes-1)/2 - 1)*30 + (($mes-1)/2 + 1)*31 + $dia;
        }
        else{
            $dias = ($mes/2)*30 + ($mes/2)*31 + $dia;
        }
    }

    echo ". Já se passaram " . $dias . " dias desde o Início do ano!";
?>