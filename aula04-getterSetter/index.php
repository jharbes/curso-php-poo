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
<pre>
    <?php
        require_once 'Caneta.php';
    
        $c1=new Caneta('Compactor','azul',1.0);
        print_r($c1);
        $c1->setModelo("BIC Cristal");
        $c1->setPonta(0.5);
        print_r($c1);
        print("Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}.");
    ?>
</pre>
</body>
</html>