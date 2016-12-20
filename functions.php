<?php

/*
     Código escrito por Jorcelino Júnior
     em caso de dúvidas, mande um email para jorcelino@live.com
*/

date_default_timezone_set("Brazil/East"); //Define o horário padrão como o de Brazilia.

function linha($semana){
    echo "<tr>\n";
    for($i=0;$i < 7; $i++){
        if(isset($semana[$i])){
            if ($semana[$i] == date('d') or $i == 6){
                echo "<td><strong>{$semana[$i]}</strong></td>\n";
            }elseif($i == 0){
                  echo "<td class='domingo'>{$semana[$i]}</td>\n";
            }else{
                echo "<td>{$semana[$i]}</td>\n";
            }
        }else{
            echo "<td></td>\n";
        }
    }
    echo "</tr>\n";
}

function calendario(){
    $dia = 1;
    $semana = array();
    while ($dia <= 31){
        array_push($semana,$dia);
        if(count($semana) == 7){
            linha($semana);
            $semana = array();
        }
        $dia++;
    }
    linha($semana);
}

function bemVindo(){
    if (date('H') >= 6 and date('H')<= 11){
        echo "Bom dia.";
    }else if(date('H') >= 12 and date('H') <= 17){
        echo "Boa tarde.";
    }else{
        echo "Bom noite";
    }
}
