<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function __construct($nome,$idade,$sexo,$curso){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setCurso($curso);
        $this->setMatricula(rand(10000,99999));
        echo "<h3>Cadastro do aluno de nome {$this->getNome()} e matrícula número {$this->getMatricula()} concluído com sucesso!</h3>";
    }

    public function cancelarMatr(){
        echo "<p>Matrícula número {$this->getMatricula()} pertencente à {$this->getNome()} cancelada com sucesso!</p>";
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
}
?>