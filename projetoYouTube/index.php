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

require_once 'AcoesVideo.php';
require_once 'Video.php';
require_once 'Pessoa.php';
require_once 'Gafanhoto.php';

$v[]=new Video('Aula 1 de POO');
$v[]=new Video("Aula 12 de PHP");
$v[]=new Video('Aula 15 de HTML');

$g[]=new Gafanhoto('Jorge Nami Harbes',39,'M','jharbes');
$g[]=new Gafanhoto('Carolina Ferreira Alcantara',28,'F','carolalcantara');

var_dump($v);
var_dump($g);

?>
</body>
</html>