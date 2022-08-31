<?php

class Ave extends Animal{
    private $corPena;

    public function locomover()
    {
        echo '<p>Ave voando!</p>';
    }

    public function alimentar()
    {
        echo "<p>Ave comendo!</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de ave!</p>";
    }

    /**
     * Get the value of corPena
     */ 
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     *
     * @return  self
     */ 
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }
}

?>