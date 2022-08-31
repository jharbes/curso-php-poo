<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero{

    public function __construct()
    {
        echo "<h3>Canguru criado!</h3>";
    }

    public function usarBolsa(){
        echo "<p>Usando bolsa de canguru!</p>";
    }

    public function locomover()
    {
        echo "<p>Saltando como um canguru!</p>";
    }
}

?>