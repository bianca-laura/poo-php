<?php
    class Person
    {
        private $name;
        private $year;
        private $sex;

        public function growsOlder()
        {
            $this -> year ++; 
        }

        public function __construct(
            $n, 
            $y, 
            $s){
            $this -> name = $n;
            $this -> year = $y;
            $this -> sex = $s;
        }
    
        
        public function getName()
        {
            return $this -> name;
        }

        public function setName($n)
        {
            $this -> name = $n;
        }

        public function getYear()
        {
            return $this -> year;
        }

        public function setYear($y)
        {
            $this -> year = $y;
        }

        public function getSex()
        {
            return $this -> sex;
        }

        public function setSex($s)
        {
            $this -> sex = $s;
        }




    }
?>