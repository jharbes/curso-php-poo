<?php

require_once 'Reptil.php';

class Tartaruga extends Reptil{

    public function __construct()
    {
        echo "<h3>Tartaruga criada!</h3>";
    }

    public function locomover()
    {
        echo "<p>Tartaruga andando beeemmmmm lentamente!</p>";
    }
}

?>