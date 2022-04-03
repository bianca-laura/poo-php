<?php
    require_once 'Lutador.php';
    class Luta{
        private $desafiado;
        private $desafiante;
        private $rouds;
        private $aprovada; 
        
        public function marcarLuta($l1,$l2){
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                $this -> setAprovada(true);            
                $this -> setDesafiado($l1);
                $this -> setDesafiante($l2);
            }else{
                $this -> setAprovada(false);
                $this -> setDesafiado(null);
                $this -> setDesafiante(null);
            }

        }

        public function Lutar(){
            if($this -> getAprovada()){
               $this -> desafiado -> apresentar();
                $this -> desafiante -> apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor){
                    case 0:
                        echo '<p>Empate</p>';
                        $this -> desafiado -> empatarLuta();
                        $this -> desafiante -> empatarluta();
                        break;
                    case 1:
                        echo "<p>{$this ->desafiado->getNome()} Ganhou a Luta </p>";
                        $this -> desafiado -> ganharLuta();
                        $this -> desafiante -> perderLuta();
                        break;
                    case 2:
                        echo "<p> {$this -> desafiante -> getNome()} Ganhou a Luta </p>";
                        $this -> desafiante ->ganharLuta();
                        $this -> desafiado -> perderLuta();
                }
            }else{
                echo "Luta não está aprovada";
            }
        }

        public function getDesafiado(){
            return $this -> desafiado;
        }

        public function setDesafiado($d){
            $this -> desafiado = $d;
        }

        
        public function getDesafiante(){
            return $this -> desafiante;
        }

        public function setDesafiante($dt){
            $this -> desafiante = $dt;
        }

        public function getRounds(){
            return $this -> rounds;
        }

        public function setRounds($r){
            $this -> rounds = $r;
        }

        
        public function getAprovada(){
            return $this -> aprovada;
        }

        public function setAprovada($a){
            $this -> aprovada = $a;

        }

    
    }
?>