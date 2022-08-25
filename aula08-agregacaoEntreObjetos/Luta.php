<?php

require_once 'Lutador.php';

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function __construct()
    {
        $this->setAprovada(false);
        echo "<p>LUTA CRIADA!";
    }

    public function marcarLuta($l1,$l2){
        if ($l1->getCategoria()==$l2->getCategoria() && $l1!=$l2){
            $this->setAprovada(false);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
            echo "<h3>Luta entre ".$l1->getNome()." e ".$l2->getNome()." marcada!</h3>";
        }else{
            echo "<p>Luta não marcada! Favor verificar os dados e tentar novamente!</p>";
        }
    }

    /**
     * Get the value of desafiado
     */ 
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    /**
     * Set the value of desafiado
     *
     * @return  self
     */ 
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    /**
     * Get the value of desafiante
     */ 
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    /**
     * Set the value of desafiante
     *
     * @return  self
     */ 
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    /**
     * Get the value of rounds
     */ 
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * Set the value of rounds
     *
     * @return  self
     */ 
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    /**
     * Get the value of aprovada
     */ 
    public function getAprovada()
    {
        return $this->aprovada;
    }

    /**
     * Set the value of aprovada
     *
     * @return  self
     */ 
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }
}

?>