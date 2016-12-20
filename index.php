<?php

function linha($semana){
    echo "<tr>\n";
    for($i=0;$i < 7; $i++){
        if(isset($semana[$i])){
            echo "<td>{$semana[$i]}</td>\n";
        }else{
            echo "</td>\n";
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

?>

<html>
    <head>
        <title>Dia <?php echo date('d');?>!</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>

    <body>

    <h1>Estamos em <?php echo date('Y');?></h1>
    <p>Agora são <?php echo date('h');?> horas e <?php echo date('i');?> minutos.</p>
        <table border="2" class="table-responsive">
           <tr>
               <th>Dom</th>
               <th>Seg</th>
               <th>Ter</th>
               <th>Qua</th>
               <th>Qui</th>
               <th>Sex</th>
               <th>Sab</th>
           </tr>
            <?php calendario();?>
        </table>
    </body>
</html>