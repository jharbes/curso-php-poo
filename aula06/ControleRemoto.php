<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
        print "<p>Controle Criado.</p>";
    }

    public function ligar(){
        if ($this->getLigado())
            print "<p>Aparelho já está ligado!</p>";
        else{
            $this->setLigado(true);
            echo "<p>Aparelho ligado!</p>";
        }
    }

    public function desligar(){
        if ($this->getLigado()){
            $this->setLigado(false);
            print "<p>Aparelho desligado!</p>";
        } else
            print "<p>Aparelho já está desligado!</p>";
    }

    public function abrirMenu(){
        if ($this->getLigado()){
            echo "<p>Aparelho está tocando: ".$this->getTocando()?'SIM':'NAO'."</p>";
            echo "<p>VOLUME:</p>";
            echo "<p>";
            for ($i=0;$i<=$this->getVolume();$i+=10)
                echo "|";
            echo "</p>";
        }
        else
            print "<p>Aparelho está desligado!</p>";
    }

    public function fecharMenu(){
        if ($this->getLigado())
            echo "<p>Fechando Menu</p>";
        else
            echo "Aparelho desligado!";
    }

    public function maisVolume(){
        if ($this->getLigado() && $this->getVolume()<50){
            $this->setVolume($this->getVolume()+5);
            echo "<p>";
            for ($i=0;$i<=$this->getVolume();$i+=10)
                echo "|";
            echo "</p>";
        }
        else if ($this->getVolume()>=50)
            echo "<p>Volume já está no máximo!</p>";
        else
            echo "<p>Aparelho desligado!</p>";
    }

    public function menosVolume(){
        if ($this->getLigado() && $this->getVolume()>0){
            $this->setVolume($this->getVolume()-5);
            echo "<p>";
            for ($i=0;$i<=$this->getVolume();$i+=10)
                echo "|";
            echo "</p>";
        }
        else if ($this->getVolume()<=0)
            echo "<p>Volume está no mínimo!</p>";
        else
            echo "<p>Aparelho desligado!</p>";
    }

    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
            echo "<p>";
            for ($i=0;$i<=$this->getVolume();$i+=10)
                echo "|";
            echo "</p>";
        }
        else if (!$this->getLigado())
            echo "<p>Aparelho desligado!</p>";
        else
            echo "<p>Aparelho já está mutado!</p>";
    }

    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
            echo "<p>";
            for ($i=0;$i<=$this->getVolume();$i+=10)
                echo "|";
            echo "</p>";
        }
        else if (!$this->getLigado())
            echo "<p>Aparelho desligado!</p>";
        else
            echo "<p>Aparelho já está mutado!</p>";
    }

    public function play()
    {
        if ($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
            echo "<h4>PLAY ></h4>";
        }
        else if ($this->getTocando())
            echo "<p>PLAY já está ligado!</p>";
        else
            echo "<p>Aparelho desligado!</p>";
    }

    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
            echo "<h4>PAUSE ||</h4>";
        }
        else if (!$this->getTocando())
            echo "<p>PAUSE já está ligado!</p>";
        else
            echo "<p>Aparelho desligado!</p>";
    }
    

    /**
     * Get the value of volume
     */ 
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of ligado
     */ 
    public function getLigado()
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     *
     * @return  self
     */ 
    public function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    /**
     * Get the value of tocando
     */ 
    public function getTocando()
    {
        return $this->tocando;
    }

    /**
     * Set the value of tocando
     *
     * @return  self
     */ 
    public function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }
}
?>