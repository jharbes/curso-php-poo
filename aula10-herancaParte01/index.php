<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Pessoas</title>
    <style>
        p{
            border: 1px solid purple;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP-POO</h1>
<?php
require_once 'Pessoa.php';
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Funcionario.php';

$pessoa1=new Pessoa("Patrick Kluivert",22,'M');
$pessoa2=new Aluno("Cicciolina",25,'F',"Artes");
$pessoa3=new Professor('Luiz Felipe Scolari',56,'M','Educação Física',40000);
$pessoa4=new Funcionario('Ana Maria Braga',95,'F','Mídias');

var_dump($pessoa1);
var_dump($pessoa2);
var_dump($pessoa3);
var_dump($pessoa4);

$pessoa3->receberAum(500);
$pessoa4->mudarTrabalho();
$pessoa2->cancelarMatr();
$pessoa4->mudarTrabalho();
?>
</body>
</html>