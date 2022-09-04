<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao{
    private $espectador;
    private $filme;

    public function __construct($espectador,$filme)
    {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->getFilme()->setViews($this->getFilme()->getViews()+1);
        $this->getEspectador()->setTotAssistido($this->getEspectador()->getTotAssistido()+1);
        echo "<h3>{$this->getEspectador()->getNome()} assistiu o vídeo {$this->getFilme()->getTitulo()}";
    }

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