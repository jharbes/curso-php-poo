<?php

require_once 'Lobo.php';

class Cachorro extends Lobo{

    public function emitirSom()
    {
        echo "<p>Au! Au! Au!</p>";
    }

    public function reagirFrase($frase){
        if ($frase=='Toma comida' || $frase=='Olá')
            echo "<p>Cachorro abanou e latiu!</p>";
        else
            echo "<p>Cachorro rosnou!!</p>";
    }

    public function reagirHora($hora,$min){
        if ($hora<12)
            echo "<p>Cachorro abanou o rabo!</p>";
        else if ($hora<=18)
            echo "<p>Cachorro abanou o rabo e latiu!</p>";
        else
            echo "<p>Cachorro ignorou você!</p>";
    }

    public function reagirDono($dono){
        if ($dono)
            echo "<p>Cachorro abanou o rabo!</p>";
        else
            echo "<p>Cachorro rosnou e latiu!</p>";
    }

    public function reagirIdadePeso($idade,$peso){
        if ($idade<5){
            if ($peso<10)
                echo "<p>Cachorro abanou!</p>";
            else
                echo "<p>Cachorro latiu!</p>";
        }else{
            if ($peso<10)
                echo "<p>Cachorro rosnou!</p>";
            else
                echo "<p>Cachorro ignorou você!</p>";
        }
    }
}

?>