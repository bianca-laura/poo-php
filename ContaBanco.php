<?php
    class ContaBanco{
        public $numBanco;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
    
        function __construct(){
            $this -> setsaldo(0);
            $this -> setStatus(false);
        }
        public function abrirConta($t){
            $this -> setTipo($t);
           $this -> setStatus(true);
           if ($t == "CC"){
                $this -> setSaldo(50);
           }elseif($t == "CP"){
               $this -> setSaldo(150);
           }else{
               echo "Tipo de conta invalido";
           }
        }
    
        public function fecharConta(){
            if ($this -> getSaldo() > 0){
                echo "ERRO, Impossivel de fechar conta, porfavor retirar o valor da conta";
            }elseif($this -> getSaldo() < 0){
                echo "ERROO, impossivel fechar, conta no negativo, porfavor regularizar a sua conta";
            }else {
                $this -> setStatus(false); 
            }     
        }

    
        public function depositar($v){
            if($this -> getStatus()){  
                 $this -> setSaldo($this -> getSaldo() + $v);     
                }else{
                    echo "Impossivel depositar";
                }
        }

    
        public function sacar($v){
            if($this -> getStatus()){
                if($this -> getSaldo() < $v){
                    echo "Saldo insuficiente";
                }elseif($this -> getSaldo() >= $v){
                    $this -> setSaldo($this -> getSaldo () - $v);
                }else {
                    echo "Conta fechada, impossivel sacar";
                }
            }
        }
    
        public function pagarMensal(){
            if($this -> status){
                if($this -> getTipo() == "CC"){
                    $v = 12;
                }elseif($this -> getTipo() == "CP"){
                    $v = 20;
                }
                $this -> setSaldo($this -> getSaldo() -$v);
            } else{
                echo "impossivel pagar";
            }
        }

        public function setFecharConta($f){
            $this -> fecharConta = $f;
        }


    
        public function getNumBanco(){
            return $this -> numBanco;

        }

        public function setNumConta($n){
             $this -> numBanco = $n;

        }

        public function getTipo(){
            return $this -> tipo;

        }

        public function setTipo($t){
             $this -> tipo = $t;

        }

        public function getDono(){
            return $this -> dono;

        }

        public function setDono($d){
             $this -> dono = $d;

        }

        public function getSaldo(){
            return $this -> saldo;

        }

        public function setSaldo($sd){
             $this -> saldo = $sd;

        }

        public function getStatus(){
            return $this -> status;

        }

        public function setStatus($s){
             $this -> status = $s;

        }

        public function setSacar($sc){
            $this -> saldo = $sc;
        }

        
    }
?>