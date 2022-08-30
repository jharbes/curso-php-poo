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
            color: yellowgreen;
            background-color: black;
        }
        strong{
            text-decoration: underline;
        }
    </style>
</head>
<body>
<h1>Curso de PHP-POO</h1>
<?php

require_once 'Pessoa.php';
require_once 'Visitante.php';
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Bolsista.php';
require_once 'Tecnico.php';

$b[]=new Bolsista('Apollo Miranda',17,'M','Economia',50,600);
$b[0]->pagarMensalidade();
$b[0]->renovarBolsa();

$a[]=new Aluno('Jorge Harbes',18,'M','TI',800);
$a[0]->pagarMensalidade();

$t[]=new Tecnico('Juanita Cabrona',25,'F','Eletrotecnica',750);
$t[0]->praticar();

$b[0]->fazerAniv();

$v[]=new Visitante();
$v[0]->setNome('Carolina Alcantara');
$v[0]->setIdade(28);
$v[0]->setSexo('F');
var_dump($v[0]);

$v[0]->fazerAniv();

$p[]=new Professor('Stephen Hawking',45,'M','Física',8000);
$p[0]->receberAum(800);

?>
</body>
</html>