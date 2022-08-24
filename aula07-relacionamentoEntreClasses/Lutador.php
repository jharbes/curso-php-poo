<?php

class Lutador{
    
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $empates;
    private $derrotas;

    public function __construct($nome,$nacionalidade,$idade,$altura,$peso,$vitorias,$derrotas,$empates)
    {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setPeso($peso);
        $this->setAltura($altura);
        $this->setVitorias($vitorias);
        $this->setEmpates($empates);
        $this->setDerrotas($derrotas);
    }

    public function apresentar(){
        echo "<div><h3 class='titulo'>Lutador: {$this->getNome()}</h3>";
        echo "<p>Origem: {$this->getNacionalidade()}<br>";
        echo "{$this->getIdade()} anos<br>";
        echo "{$this->getAltura()}m de altura<br>";
        echo "Pesando {$this->getPeso()}kg<br>";
        echo "{$this->getVitorias()} vitórias<br>";
        echo "{$this->getEmpates()} empates<br>";
        echo "{$this->getDerrotas()} derrotas</p></div>";
    }

    public function status(){
        echo "<div><h3 class='titulo'>Lutador: {$this->getNome()}</h3>";
        echo "<p>É um peso {$this->getCategoria()}<br>";
        echo "{$this->getVitorias()} vitórias<br>";
        echo "{$this->getEmpates()} empates<br>";
        echo "{$this->getDerrotas()} derrotas</p></div>";
    }

    public function ganharLuta(){
        echo "<p>{$this->getNome()} venceu a luta!</p>";
        $this->setVitorias($this->getVitorias()+1);
    }

    public function perderLuta(){
        echo "<p>{$this->getNome()} perdeu a luta!</p>";
        $this->setDerrotas($this->getDerrotas()+1);
    }

    public function empatarLuta(){
        echo "<p>{$this->getNome()} empatou a luta!</p>";
        $this->setEmpates($this->getEmpates()+1);
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of nacionalidade
     */ 
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     *
     * @return  self
     */ 
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;
        if ($this->getPeso()<52.2)
            $this->setCategoria("INVÁLIDO");
        else if ($this->getPeso()<=70.3)
            $this->setCategoria("LEVE");
        else if ($this->getPeso()<=83.9)
            $this->setCategoria("MÉDIO");
        else if ($this->getPeso()<=120.2)
            $this->setCategoria("PESADO");
        else
            $this->setCategoria("INVÁLIDO");

        return $this;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    private function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of vitorias
     */ 
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * Set the value of vitorias
     *
     * @return  self
     */ 
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    /**
     * Get the value of empates
     */ 
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * Set the value of empates
     *
     * @return  self
     */ 
    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }

    /**
     * Get the value of derrotas
     */ 
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * Set the value of derrotas
     *
     * @return  self
     */ 
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }
}