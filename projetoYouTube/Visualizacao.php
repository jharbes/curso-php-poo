<?php

class Visualizacao{
    private $espectador;
    private $filme;

    public function avaliar(){

    }

    public function avaliarNota($nota){

    }

    public function avaliarPorcentagem($porcentagem){
        
    }

    /**
     * Get the value of espectador
     */ 
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * Set the value of espectador
     *
     * @return  self
     */ 
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;

        return $this;
    }

    /**
     * Get the value of filme
     */ 
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     *
     * @return  self
     */ 
    public function setFilme($filme)
    {
        $this->filme = $filme;

        return $this;
    }
}

?>