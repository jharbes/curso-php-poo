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
    require_once 'ContaBanco.php';
    $c1=new ContaBanco;
    $c1->sacar(60);
    var_dump($c1);
    $c1->abrirConta('cc');
    print_r($c1);

    $c2= new ContaBanco;

    $c2->consultaSaldo();
    $c2->abrirConta('cp');
    var_dump($c2);

    $c1->depositar(200);
    var_dump($c1);

    $c2->sacar(50);
    $c1->depositar(1000);

    $c1->pagarMensal();
    $c2->pagarMensal();

    $c1->sacar(2000);

    $c1->consultaSaldo();
?>
</body>
</html>