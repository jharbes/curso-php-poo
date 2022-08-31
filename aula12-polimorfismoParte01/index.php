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
    require_once 'Animal.php';
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
    require_once 'Canguru.php';
    require_once 'Cachorro.php';
    require_once 'Tartaruga.php';
    require_once 'Arara.php';
    require_once 'Cobra.php';
    require_once 'Goldfish.php';

    $m1=new Mamifero;
    $m1->setPeso(33.5);
    $m1->setIdade(4);
    $m1->setMembros(4);
    $m1->setCorPelo('marrom');
    $r1=new Reptil;
    $t1=new Tartaruga;
    $p1=new Peixe;
    $a1=new Ave;
    $m1->emitirSom();   
    $r1->locomover();
    $t1->alimentar();
    $a1->locomover();
    $c1=new Canguru;
    $c1->usarBolsa();
    $t1->locomover();
    $k=new Cachorro;
    $k->enterrarOsso();
    $k->emitirSom();
?>
</body>
</html>