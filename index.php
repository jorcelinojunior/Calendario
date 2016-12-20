<?php
include 'functions.php';
?>

<html>
<head>
    <title>Dia <?php echo date('d');?>!</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>

<h1>Estamos em <?php echo date('Y');?></h1>
<p><?php bemVindo();?></p>
<p>Agora são <?php echo date('H');?> horas e <?php echo date('i');?> minutos.</p>
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
