<?php

require_once 'Pessoa.php';
require_once 'Bolsista.php';
require_once 'Tecnico.php';

class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    private $mensalidade;

    public function __construct($nome,$idade,$sexo,$curso){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setCurso($curso);
        $this->setMatricula(rand(10000,99999));
        echo "<h3>Cadastro do aluno de nome {$this->getNome()} e matrícula número {$this->getMatricula()} concluído com sucesso!</h3>";
    }

    public function pagarMensalidade(){
        echo "<p>Aluno {$this->getNome()} de matrícula {$this->getMatricula()} pagou sua mensalidade no valor de R$$this->mensalidade.</p>";
    }

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of mensalidade
     */ 
    public function getMensalidade()
    {
        return $this->mensalidade;
    }

    /**
     * Set the value of mensalidade
     *
     * @return  self
     */ 
    public function setMensalidade($mensalidade)
    {
        $this->mensalidade = $mensalidade;

        return $this;
    }
}

?>