<?php

require_once "Livro.php";
require_once "Publicacao.php";
require_once "Pessoa.php";

class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome,$idade,$sexo)
    {   
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        echo "<p>Cadastro de {$this->getNome()} criado com sucesso!</p>";
    }

    public function fazerAniver(){
        echo "<h3>Parabéns pelo aniversário $this->nome!!</h3>";
        $this->setIdade($this->getIdade()+1);
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
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}

?>