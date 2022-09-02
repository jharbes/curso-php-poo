<?php

require_once 'Pessoa.php';
require_once 'Video.php';

class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    public function Gafanhoto($nome,$idade,$sexo){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    public function viuMaisUm(){
        
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