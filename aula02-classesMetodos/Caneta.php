<?php
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar(){
            echo $this->tampada?"<p>Destampe a caneta antes de rabiscar!</p>":"<p>Estou rabiscando...</p>";
        }
        
        function tampar(){
            $this->tampada=true;
        }

        function destampar(){
            $this->tampada=false;
        }
    }
?>