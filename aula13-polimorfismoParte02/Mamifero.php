<?php

require_once 'Animal.php';

class Mamifero extends Animal{
    protected $corPelo;

    public function emitirSom()
    {
        echo "<p>Som de mamífero!</p>";
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