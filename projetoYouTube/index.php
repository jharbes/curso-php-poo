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
require_once 'Visualizacao.php';

$v[]=new Video('Aula 1 de POO');
$v[]=new Video("Aula 12 de PHP");
$v[]=new Video('Aula 15 de HTML');

$g[]=new Gafanhoto('Jorge Nami Harbes',39,'M','jharbes');
$g[]=new Gafanhoto('Carolina Ferreira Alcantara',28,'F','carolalcantara');

$vis[]=new Visualizacao($g[0],$v[0]);
$vis[]=new Visualizacao($g[0],$v[1]);
$vis[]=new Visualizacao($g[0],$v[2]);

$vis[0]->avaliarNota(4);
$vis[1]->avaliarPorcentagem(80);
$vis[2]->avaliarNota(7);

var_dump($vis);

$vis[]=new Visualizacao($g[1],$v[0]);
$vis[]=new Visualizacao($g[1],$v[1]);
$vis[]=new Visualizacao($g[1],$v[2]);

$vis[3]->avaliar();
$vis[4]->avaliarNota(9);
$vis[5]->avaliarPorcentagem(60);

var_dump($v);
var_dump($g);
var_dump($vis);

?>
</body>
</html>