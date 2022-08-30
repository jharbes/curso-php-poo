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

require_once 'Pessoa.php';
require_once 'Visitante.php';
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Bolsista.php';
require_once 'Tecnico.php';

$b[]=new Bolsista('Apollo Miranda',17,'M','Economia',50,600);
$b[0]->pagarMensalidade();

$a[]=new Aluno('Jorge Harbes',18,'M','TI',800);
$a[0]->pagarMensalidade();

?>
</body>
</html>