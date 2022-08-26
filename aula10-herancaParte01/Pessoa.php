<?php

require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Funcionario.php';

class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome,$idade,$sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        echo "<h3>Cadastro de pessoa de nome {$this->getNome()} concluído com sucesso!</h3>";
    }

    public function fazerAniv(){
        echo "<p>Parabéns pelo seu aniversário {$this->getNome()}!</p>";
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