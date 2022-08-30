<?php

require_once 'Pessoa.php';
require_once 'Aluno.php';

class Tecnico extends Aluno{
    private $registroProfissional;

    public function __construct($nome,$idade,$sexo,$curso,$mensalidade){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setCurso($curso);
        $this->setMatricula(rand(10000,99999));
        $this->setMensalidade($mensalidade);
        $this->setRegistroProfissional(rand(100,999));
        echo "<h3>Cadastro do aluno de nome {$this->getNome()}, matrícula número {$this->getMatricula()} e registro profissional de Nº{$this->getRegistroProfissional()} concluído com sucesso!</h3>";
    }

    public final function praticar(){
        echo "<p>Profissional técnico {$this->getNome()} de registro profissional Nº{$this->getRegistroProfissional()} praticou na data de hoje</p>";
    }

    /**
     * Get the value of registroProfissional
     */ 
    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }

    /**
     * Set the value of registroProfissional
     *
     * @return  self
     */ 
    public function setRegistroProfissional($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;

        return $this;
    }
}

?>