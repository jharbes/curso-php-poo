<?php

require_once 'Visitante.php';
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Bolsista.php';
require_once 'Tecnico.php';

abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;

    final public function fazerAniv(){
        echo "<p>Parabéns pelo seu aniversário <strong>{$this->getNome()}</strong>!</p>";
        $this->idade++;
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