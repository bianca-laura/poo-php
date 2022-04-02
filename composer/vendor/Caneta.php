<?php
    class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function escrever(){

        }

        public function rabiscar(){
            if($this -> tampada){
                echo "Estou rabscando..";
            }else {
                echo "ERROOO, caneta destampada, favor tampar";
            }
        }

        public function pintar(){

        }

        public function tampar() {
            return $this -> tampada = true;

        }

        public function destampar(){
            $this -> tampada = false;
        }


    }
?>