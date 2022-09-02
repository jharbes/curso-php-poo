<?php

require_once 'Pessoa.php';
require_once 'Video.php';

class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    public function __construct($nome,$idade,$sexo,$login){
        // caso a superclasse Pessoa tivesse um construtor poderiamos aproveitar seus dados com
        // o comando parent::__construct($nome,$idade,$sexo); aí então utilizaríamos as linhas do
        // construtor da superclasse, no entanto ainda teríamos que pedir $nome,$idade e $sexo nesse
        // construtor da classe Gafanhoto
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setLogin($login);
        $this->setTotAssistido(0);
        $this->setExperiencia(0);
        echo "<h3>$this->nome é o mais novo gafanhoto!</h3>";
    }

    public function viuMaisUm(){
        $this->totAssistido++;
        echo "<p>$this->nome assistiu mais um vídeo!</p>";
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of totAssistido
     */ 
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * Set the value of totAssistido
     *
     * @return  self
     */ 
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;

        return $this;
    }
}

?>