<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
        print "<p>Controle Criado.</p>";
    }

    

    /**
     * Get the value of volume
     */ 
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of ligado
     */ 
    public function getLigado()
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     *
     * @return  self
     */ 
    public function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    /**
     * Get the value of tocando
     */ 
    public function getTocando()
    {
        return $this->tocando;
    }

    /**
     * Set the value of tocando
     *
     * @return  self
     */ 
    public function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }
}
?>