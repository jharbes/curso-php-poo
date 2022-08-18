<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Curso de PHP-POO</h1>
<?php
    require_once 'Caneta.php';
    $c1=new Caneta;
    $c1->cor="Azul";
    $c1->ponta=0.5;
    $c1->tampada=false;

    var_dump($c1);
    print("<br><br>");
    print_r($c1);
    print("<br><br>");
    var_export($c1);

    $c1->tampar();
    $c1->rabiscar();

    $c2=new Caneta;
    $c2->cor='Verde';
    $c2->carga=50;
    $c2->tampar();

    var_export($c2);
?>
</body>
</html>