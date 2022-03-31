<?php

    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;
    
        public function __construct($n, $nc, $a, $i, $v, $d, $e){
            $this -> nome = $n;
            $this -> nacionalidade = $nc;
            $this -> altura = $a;
            $this -> idade = $i;
            $this -> vitorias = $v;
            $this -> derrotas = $d;
            $this -> empates = $e;
            

        }

        public function getNome(){
            return $this -> nome;
        }

        public function setNome($n){
            $this -> nome = $n;
        }

        public function getNacionalidade(){
            return $this -> nacionalidade;
        }

        public function setNacionalidade($nc){
            $this -> nacionalidade = $nc;
        }

        public function getAltura(){
            return $this -> altura;
        }
        public function setAltura($a){
             $this -> altura = $a;
        }

        public function setPeso($p){
            $this -> peso = $p;
            $this -> setCategoria();
        }
        public function getPeso(){
            return $this -> peso;
        }
        public function setIdade($i){
            $this -> idade = $i;
        }
        public function getIdade(){
            return $this -> idade;
        }

        public function getCategoria(){
            return $this -> categoria;
        }

        public function setCategoria(){
           if ($this -> peso < 52.2){
               $this -> categoria = "Invalido";
           }elseif($this ->peso <= 70.3){
               $this -> categoria = "Leve";
           }elseif($this -> peso <= 83.9){
                $this -> categoria = "Médio";
            }elseif($this -> peso <= 120.2){
                $this -> categoria = "Pesado";
            }else{
                $this -> categoria = "Invalido";
            }
            
        }
        
        public function getVitorias(){
            return $this -> vitorias;
        }

        public function setVitorias($v){
            $this -> vitorias = $v;
        }
        public function getDerrotas(){
            return $this -> derrotas;
        }

        public function setDerrotas($d){
            $this -> derrotas = $d;
        }
        public function getEmpates(){
            return $this -> empates;
        }

        public function setEmpates($e){
            $this -> empates = $e;
        }

        public function apresentar(){
            echo "<p>---------------------</p>";
            echo "<p> Chegou a hora!!!! <br /> O lutador: {$this -> getNome()} </p>";
            echo "<p> Veio diretamente de:  </p>". $this -> getNacionalidade();
            echo "<p>Tem {$this -> getIdade()} Anos de idade e pesa {$this -> getPeso()}Kg </p>";
            echo "<p>Ele tem {$this->getVitorias()} Vitorias, {$this->getDerrotas()} Derrotas e {$this->getEmpates()} Empates</p>";

        }

        public function status(){
            echo "<p> ----------------- </p>";
            echo "<p>{$this->getNome()} é um peso {$this->getCategoria()} </p>";
            echo "<p>e ja ganhou {$this-> getVitorias()}x, perdeu {$this-> getDerrotas()}x e empatou {$this-> getEmpates()}x.</p>";
        }

        public function ganharLuta(){
            $this -> setVitorias($this -> getVitorias() + 1);
        }

        public function perderLuta(){
            $this -> setDerrotas($this -> getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this -> setEmpates($this -> getEmpates() + 1);
        }

    
    }
?>