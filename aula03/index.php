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
    require_once 'Caneta.php';
    $c1=new Caneta;
    $c1->modelo='BIC Cristal';
    $c1->cor='Azul';

    // Os comandos abaixo foram comentados pois apenas são para demonstrar a incapacidade de acessar atributos privados e protegidos.

    // $c1->ponta=0.5;
    // $c1->carga=99;
    // $c1->tampada=true;

    var_dump($c1);
    echo "<br><br>";
    print_r($c1);
    
    echo "<br>";
    $c1->rabiscar();
    $c1->tampar();
    var_dump($c1);
?>
</body>
</html>