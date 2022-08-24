<?php
    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
            echo $this->tampada?"<p>Destampe a caneta antes de rabiscar!</p>":"<p>Estou rabiscando...</p>";
        }
        
        public function tampar(){
            $this->tampada=true;
            echo "Você tampou a caneta.";
        }

        public function destampar(){
            $this->tampada=false;
            echo "Você destampou a caneta.";
        }
    }
?>