<?php

require_once 'Publicacao.php';
require_once "Livro.php";
require_once "Pessoa.php";

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo,$autor,$totPaginas)
    {
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->totPaginas=$totPaginas;
        $this->pagAtual=0;
        $this->aberto=false;
        echo "<p>LIVRO {$this->getTitulo()} cadastrado com sucesso!</p>";
    }

    public function detalhes(){
        echo "<hr><h3>Livro: $this->titulo<h3>";
        echo "<p>autor: $this->autor<br>";
        echo "totPaginas: $this->totPaginas<br>";
        echo "pagAtual: {$this->getPagAtual()}<br>";
        echo $this->getAberto()?"aberto: SIM<br>":"aberto: NÃO<br>";
        echo $this->getLeitor()!=null?"leitor: {$this->getLeitor()->getNome()}</p><hr></h3>":"leitor: N/A</h3><hr>";
    }

    public function abrir(){
        if (!$this->getAberto()){
            echo "<p>Livro {$this->getTitulo()} foi aberto!</p>";
            $this->setAberto(true);
            $this->setPagAtual(1);
        }
        else{
            echo "<p>Livro {$this->getTitulo()} já está aberto!</p>";
        }
    }

    public function fechar(){
        if ($this->getAberto()){
            echo "<p>Livro {$this->getTitulo()} foi fechado!</p>";
            $this->setAberto(false);
            $this->setPagAtual(0);
        }
        else{
            echo "<p>Livro {$this->getTitulo()} já está fechado!</p>";
        }
    }

    public function folhear($pagina){
        if ($this->getAberto() && $this->getTotPaginas()>=$pagina){
            echo "<p>Livro {$this->getTitulo()} agora na página de número $pagina.</p>";
            $this->setPagAtual($pagina);
        }else if (!$this->getAberto()){
            echo "<p>Livro {$this->getTitulo()} ainda está fechado, não pode ser folheado!</p>";
        }else
            echo "<p>Página $pagina acima do número total de paginas do {$this->getTitulo()}!</p>";
    }

    public function avancarPag(){
        if ($this->getAberto() && $this->pagAtual<$this->totPaginas){
            echo "<p>Página avançada, página atual agora é {$this->getPagAtual()}</p>";
            $this->setPagAtual($this->getPagAtual()+1);
        }
        else if (!$this->getAberto())
            echo "<p>Não foi possível avançar página, livro não está aberto!</p>";
        else
            echo "<p>Livro já está na última página!</p>";
    }

    public function voltarPag(){
        if ($this->getAberto() && $this->pagAtual>1){
            echo "<p>Página voltada, página atual agora é {$this->getPagAtual()}</p>";
            $this->setPagAtual($this->getPagAtual()-1);
        }
        else if (!$this->getAberto())
            echo "<p>Não foi possível avançar página, livro não está aberto!</p>";
        else
            echo "<p>Livro já está na primeira página, não é possível voltar!</p>";
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of totPaginas
     */ 
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * Set the value of totPaginas
     *
     * @return  self
     */ 
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;

        return $this;
    }

    /**
     * Get the value of pagAtual
     */ 
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * Set the value of pagAtual
     *
     * @return  self
     */ 
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }

    /**
     * Get the value of aberto
     */ 
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * Set the value of aberto
     *
     * @return  self
     */ 
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }

    /**
     * Get the value of leitor
     */ 
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * Set the value of leitor
     *
     * @return  self
     */ 
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }
}

?>