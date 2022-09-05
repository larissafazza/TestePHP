<!-- Esta é uma classe que possui um método estático que recebe como parâmetro uma data em formato brasileiro
(dd/mm/YYYY) e retorna essa data em formato americano (YYYY-mm-dd), o método toAmerican(). -->

<!-- Além disso, possui o método estático toggle() que recebe como parâmetro uma data
e detecta data está em formato brasileiro e, caso esteja, retorne essa data em formato americano e, caso esteja
em formato brasileiro, o método deverá testar se a data está em formato americano,
no americano, retorna em formato brasileiro. E, caso tenha sido passado um
formato diferente do formato americano ou brasileiro, printa a mensagem "Formato de data inválido" -->

<?php

class MyDate
{
    public static function toAmerican($brdate){

        echo "Entrada: " . $brdate . " => Saída: ";
        $brdate = explode("/", $brdate);
        list($dia, $mes, $ano) = $brdate;
        $data = "$ano-$mes-$dia";
        echo $data;
    }

    public static function toBrazillian($usdate){

        echo "Entrada: " . $usdate . " => Saída: ";
        $usdate = explode("-", $usdate);
        list($ano, $mes, $dia) = $usdate;
        $data = "$dia/$mes/$ano";
        echo $data;
    }

    public static function toggle($date){
        if (preg_match("/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/",$date)) {
            echo "A data se encontra em formato brasileiro! ";
            MyDate::toAmerican($date);
    
        }
        else if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
            echo "A data se encontra em formato americano! " . "\n";
            MyDate::toBrazillian($date);

        } else {
            die("Formato de data inválido");

        }
    }
}

?>