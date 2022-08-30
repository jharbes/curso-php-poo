<?php

require_once 'Pessoa.php';
require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $bolsa;

    public function __construct($nome,$idade,$sexo,$curso,$bolsa,$mensalidade)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setCurso($curso);
        $this->setMatricula(rand(10000,99999));
        $this->setMensalidade($mensalidade);
        $this->bolsa=$bolsa;
        echo "<h3>Cadastro do aluno bolsista de nome {$this->getNome()}, matrícula número {$this->getMatricula()} e bolsa de $this->bolsa% concluído com sucesso!</h3>";
    }

    public function renovarBolsa(){
        echo "<p>Bolsa do aluno {$this->getNome()} de matrícula {$this->getMatricula()} no percentual de {$this->getBolsa()}% renovada com sucesso!</p>";
    }

    public function pagarMensalidade(){
        echo "<p>Aluno {$this->getNome()} de matrícula {$this->getMatricula()} pagou sua mensalidade com desconto no valor de R$",$this->getMensalidade()-$this->getMensalidade()*$this->getBolsa()/100,"</p>";
    }

    /**
     * Get the value of bolsa
     */ 
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     *
     * @return  self
     */ 
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}

?>