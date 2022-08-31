<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero{

    public function __construct()
    {
        echo "<h3>Cachorro criado!</h3>";
    }

    public function emitirSom()
    {
        echo "<p>Cachorro latindo!</p>";
    }

    public function enterrarOsso(){
        echo "<p>Cachorro enterrou osso!</p>";
    }

    public function abanarRabo(){
        echo "<p>Cachorro abanando rabo!</p>";
    }
}

?>