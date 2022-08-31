<?php

class Reptil extends Animal{
    private $corEscama;

    public function locomover()
    {
        echo "<p>Corrida de réptil!</p>";
    }

    public function alimentar()
    {
        echo "<p>Alimentação de répteis!</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de Réptil!</p>";
    }

    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}

?>