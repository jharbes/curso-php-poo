<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo)    
    {
        $this->setTitulo($titulo);
        $this->avaliacao=0;
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
        echo "<h3>Video $this->titulo incluído no inventário!</h3>";
    }

    public function play(){
        if ($this->getReproduzindo())
            echo "<p>Vídeo já está reproduzindo, Comando negado!</p>";
        else{
            $this->setReproduzindo(true);
            echo "<p><strong>PLAY ></strong></p>";
        }
    }

    public function pause(){
        if (!$this->getReproduzindo())
            echo "<p>Vídeo já está pausado, Comando negado!</p>";
        else{
            $this->setReproduzindo(true);
            echo "<p><strong>PAUSE ||</strong></p>";
        }
    }

    public function like(){
        $this->setCurtidas($this->getCurtidas()+1);
        echo "<p>Você curtiu o vídeo $this->nome!</p>";
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of avaliacao
     */ 
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * Set the value of avaliacao
     *
     * @return  self
     */ 
    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = (($this->views-1)*$this->avaliacao + $avaliacao)/$this->views;

        return $this;
    }

    /**
     * Get the value of views
     */ 
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set the value of views
     *
     * @return  self
     */ 
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get the value of curtidas
     */ 
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    /**
     * Set the value of curtidas
     *
     * @return  self
     */ 
    private function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;

        return $this;
    }

    /**
     * Get the value of reproduzindo
     */ 
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * Set the value of reproduzindo
     *
     * @return  self
     */ 
    private function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;

        return $this;
    }
}

?>