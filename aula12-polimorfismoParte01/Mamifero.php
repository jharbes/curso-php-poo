<?php

require_once 'Animal.php';

class Mamifero extends Animal{
    private $corPelo;

    public function __construct()
    {
        echo "<h3>Mamífero criado!</h3>";
    }

    public function locomover()
    {
        echo "<p>Mamífero correndo!</p>";
    }

    public function alimentar()
    {
        echo "<p>Mamífero mamando!</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de mamífero</p>";
    }

    /**
     * Get the value of corPelo
     */ 
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Set the value of corPelo
     *
     * @return  self
     */ 
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }
}

?>