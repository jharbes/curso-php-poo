<?php
class Caneta{
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;

    // Método construtor

    public function __construct($m,$c,$p)
    {
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->setTampada(true);
    }
    /*
    public function __construct()
    {
        $this->cor='Azul';
        $this->tampar();
    }
    */
    /*
    Abaixo mostramos uma outra maneira de criar o método construtor, nesse caso usamos o nome da Classe como nome da função, mas o indicado é utilizar o nome __construct() em vez do nome da Classe.

    public function Caneta(){
        $this->cor='Azul';
        $thia->tampar();
    }
    */

    // Métodos da classe

    public function tampar(){
        $this->tampada=true;
    }

    // Métodos Getters e Setters

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo=$m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta=$p;
    }
    


    /**
     * Get the value of cor
     */ 
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     *
     * @return  self
     */ 
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of tampada
     */ 
    public function getTampada()
    {
        return $this->tampada;
    }

    /**
     * Set the value of tampada
     *
     * @return  self
     */ 
    public function setTampada($tampada)
    {
        $this->tampada = $tampada;

        return $this;
    }
}

?>