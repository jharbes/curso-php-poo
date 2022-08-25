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
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
            echo "<h2>Luta entre ".$l1->getNome()." e ".$l2->getNome()." marcada!</h2>";
        }else{
            echo "<h2>Luta não marcada! Favor verificar os dados e tentar novamente!</h2>";
        }
    }

    public function lutar(){
        if ($this->getAprovada()){
            echo "<hr>";
            echo "<h2>A LUTA VAI COMEÇAR!</h2>";
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            switch(rand(0,2)){
                case 0:
                    echo "<h2>EMPATE!</h2>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1:
                    echo "<h2>O desafiado {$this->getDesafiado()->getNome()} venceu!</h2>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2:
                    echo "<h2>O desafiante {$this->getDesafiante()->getNome()} venceu!</h2>";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    break;
                default:
                    echo "ERRO!";
            }
            echo "<hr>";
        }
        else{
            echo "<h2>Luta não pode ocorrer!</h2>";
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