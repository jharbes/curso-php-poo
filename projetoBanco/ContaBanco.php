<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        $this->setNumConta(rand(100,999));
        print "<p>Conta nova gerada de número {$this->getNumConta()}.</p>";
    }

    public function abrirConta($tipo){
        strtolower($tipo);
        if ($tipo=='cc' || $tipo=='cp')
        {
            $this->setTipo($tipo);
            $this->setStatus(true);
            if ($tipo=='cc')
                $this->setSaldo(50);
            else
                $this->setSaldo(150);
        }
        else{
            echo "<p>Tipo de conta desconhecido, favor informar CC (Conta Corrente) ou CP (Conta Poupança).<br>Abertura de conta negada.</p>";
        }
    }

    public function consultaSaldo(){
        echo $this->getStatus()?"<p>O saldo da conta de número $this->numConta é de R$ {$this->getSaldo()}":"<p><strong>Acesso não autorizado! Conta não está ativa!</strong></p>";
    }

    public function fecharConta(){
        if ($this->getSaldo()==0){
            $this->setStatus(false);
            echo "<p>Conta de número {$this->getNumConta()} encerrada!</p>";
        }
        else{
            echo "<p>Encerramento negado! O saldo deve estar zerado para efetivar o encerramento!</p>";
        }
    }

    public function depositar($valor){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$valor);
            echo "<p>Depósito de $valor reais na conta $this->numConta efetivado com sucesso!";
        }
        else
            echo "<p>Conta não está aberta, depósito negado!</p>";
    }

    public function sacar($valor){
        if ($this->getStatus() && $this->getSaldo()>=$valor){
            $this->setSaldo($this->getSaldo()-$valor);
            echo "<p>Saque de $valor reais na conta $this->numConta efetivado com sucesso!";
        }
        else if ($this->getSaldo()<$valor && $this->getStatus())
            echo "<p>Saque negado, saldo insuficiente!</p>";
        else if ($this->getStatus()==false)
            echo "<p>Saque negado, conta está encerrada!</p>";
    }

    public function pagarMensal(){
        if ($this->getStatus()){
            if ($this->getTipo()=='cc' && $this->getSaldo()>=12){
                $this->setSaldo($this->getSaldo()-12);
                echo "<p>Mensalidade de R$12 cobrada com sucesso na conta {$this->getNumConta()}</p>";
            }
            else if ($this->getTipo()=='cc' && $this->getSaldo()<12)
                echo "<p>Mensalidade de R$12 não cobrada! Saldo insuficiente!</p>";
            if ($this->getTipo()=='cp' && $this->getSaldo()>=20){
                $this->setSaldo($this->getSaldo()-20);
                echo "<p>Mensalidade de R$20 cobrada com sucesso na conta {$this->getNumConta()}</p>";
            }
            else if ($this->getTipo()=='cc' && $this->getSaldo()<20)
                echo "<p>Mensalidade de R$20 não cobrada! Saldo insuficiente!</p>";
        }
        else{
            echo "<p>Não foi possível efetuar a cobrança, conta encerrada!</p>";
        }
    }

    /**
     * Get the value of numConta
     */ 
    public function getNumConta()
    {
        return $this->numConta;
    }

    /**
     * Set the value of numConta
     *
     * @return  self
     */ 
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of dono
     */ 
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * Set the value of dono
     *
     * @return  self
     */ 
    public function setDono($dono)
    {
        $this->dono = $dono;

        return $this;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}


?>