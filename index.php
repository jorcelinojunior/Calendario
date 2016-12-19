<?php

function linha($semana){
    echo "
    <tr>
           <td>{$semana[0]}</td>
           <td>{$semana[1]}</td>
           <td>{$semana[2]}</td>
           <td>{$semana[3]}</td>
           <td>{$semana[4]}</td>
           <td>{$semana[5]}</td>
           <td>{$semana[6]}</td>
       </tr>
       ";
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