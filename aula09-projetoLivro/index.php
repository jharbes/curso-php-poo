<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            box-sizing: border-box;
        }
        p{
            border: 1px solid black;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP-POO</h1>
<?php

require_once "Livro.php";
require_once "Publicacao.php";
require_once "Pessoa.php";

$pessoa[]=new Pessoa('Jorge Nami Harbes',39,'M');
$pessoa[]=new Pessoa("Carolina Ferreira Alcantara",28,'F');

$livro[]=new Livro("HTML5 e CSS3",'Elizabeth Castro',150);
$livro[]=new Livro("PHP Básico","José da Silva",300);
$livro[0]->detalhes();
$livro[0]->setLeitor($pessoa[0]);
$livro[0]->abrir();
$livro[0]->detalhes();
$livro[]=new Livro('Livro teste2','Joaozinho',50);
$livro[1]->detalhes();
$livro[1]->folhear(20);
$livro[1]->avancarPag();
$livro[0]->voltarPag(); 
$livro[0]->folhear(800);
$livro[1]->fechar();
$livro[0]->fechar();
$livro[1]->setLeitor($pessoa[1]);

var_dump($livro);
$livro[1]->detalhes();
?>
</body>
</html>