<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function __construct($nome,$idade,$sexo,$especialidade,$salario)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->especialidade=$especialidade;
        $this->salario=$salario;
        echo "<h3>Cadastro do professor de nome {$this->getNome()} e especialidade {$this->getEspecialidade()} concluído com sucesso!</h3>";
    }

    public function receberAum($aumento){
        echo "<p>{$this->getNome()}, parábens pelo seu aumento de $aumento!</p>";
        $this->setSalario($this->getSalario()+$aumento);
    }

    /**
     * Get the value of especialidade
     */ 
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set the value of especialidade
     *
     * @return  self
     */ 
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}

?>