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
require_once 'Lobo.php';
require_once 'Cachorro.php';

$c=new Mamifero;
$c->emitirSom();

$k=new Cachorro;
$k->emitirSom();

$l=new Lobo;
$l->emitirSom();

$k->reagirFrase("Olá");
$k->reagirFrase("oi");

$k->reagirHora(4,10);

$k->reagirDono(true);
$k->reagirDono(false);

$k->reagirIdadePeso(2,30);
$k->reagirIdadePeso(8,5);
  
?>
</body>
</html>