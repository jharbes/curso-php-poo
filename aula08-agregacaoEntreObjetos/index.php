<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border: 1px solid black;
            width: fit-content;
            margin: 10px;
            background-color: darkgrey;
        }
        h3.titulo{
            margin: 0px;
        }
        p{
            width: fit-content;
            margin: 0px;
        }
    </style>    
</head>
<body>
<h1>Curso de PHP-POO</h1>
<?php
require_once 'Lutador.php';
require_once 'Luta.php';

$l[]=new Lutador('Pretty Boy','França',31,1.75,68.9,11,3,1);
$l[]=new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3);
$l[]=new Lutador('Snapshadow',"EUA",35,1.65,80.9,12,2,1);
$l[]=new Lutador("Dead Code",'Austrália',28,1.93,81.6,13,0,2);
$l[]=new Lutador("Ufocobol",'Brasil',37,1.70,119.3,5,4,3);
$l[]=new Lutador("Nerdaard",'EUA',30,1.81,105.7,12,2,4);

$l[0]->apresentar();
$l[1]->status();
$l[3]->perderLuta();

$l[3]->apresentar();

$luta[]=new Luta;
$luta[0]->marcarLuta($l[0],$l[1]);
$luta[0]->lutar();

$luta[]=new Luta;
$luta[1]->marcarLuta($l[2],$l[5]);

$luta[1]->marcarLuta($l[2],$l[3]);
$luta[1]->lutar();

var_dump($l);
var_dump($luta);

?>
</body>
</html>