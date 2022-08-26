<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function __construct($nome,$idade,$sexo,$setor)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->trabalhando=false;
        $this->setor=$setor;
        echo "<h3>Cadastro do funcionário de nome {$this->getNome()} concluído com sucesso!</h3>";
    }

    public function mudarTrabalho(){
        if ($this->getTrabalhando()){
            $this->setTrabalhando(false);
            echo "<p>{$this->getNome()} bateu seu ponto de saída!</p>";
        }else{
            $this->setTrabalhando(true);
            echo "<p>{$this->getNome()} bateu seu ponto de entrada!</p>";
        }
    }

    /**
     * Get the value of setor
     */ 
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     *
     * @return  self
     */ 
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of trabalhando
     */ 
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Set the value of trabalhando
     *
     * @return  self
     */ 
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}

?>