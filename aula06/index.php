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
    </style>
</head>
<body>
<h1>Curso de PHP-POO</h1>
<pre>
    <?php
        require_once 'ControleRemoto.php';
    
        $c1=new ControleRemoto;
    
        $c1->ligar();
        $c1->abrirMenu();
        $c1->play();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->ligarMudo();
    ?>
</pre>
</body>
</html>