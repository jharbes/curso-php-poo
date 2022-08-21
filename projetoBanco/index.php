<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            border: 1px solid black;
            width: fit-content;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
<h1>Curso de PHP-POO</h1>
<?php
    require_once 'ContaBanco.php';
    $c1=new ContaBanco;
    $c1->depositar(300);

    $c1->sacar(60);
    var_dump($c1);
    $c1->abrirConta('cc');
    $c1->setDono('Jubileu');
    $c1->depositar(300);
    print_r($c1);

    $c2= new ContaBanco;
    $c2->depositar(500);

    $c2->consultaSaldo();
    $c2->abrirConta('cp');
    $c2->setDono('Creuza');
    $c2->depositar(500);

    var_dump($c2);

    $c1->depositar(200);
    var_dump($c1);

    $c2->sacar(50);
    $c1->depositar(1000);

    $c1->pagarMensal();
    $c2->pagarMensal();

    $c1->sacar(2000);

    $c1->consultaSaldo();
    $c2->fecharConta();
    $c1->sacar(1238);
    $c1->fecharConta();
    $c1->pagarMensal(); 
?>
</body>
</html>