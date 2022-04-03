<?php
namespace Biancalaura\ComposerPhp;
    class Officer extends Person
    {
        private $sector;
        private $working;
        private $profession;
        private $salary;

        public function __contruct()
        {

        }

        public function details(){
            return $this->getName().', trabalha de  '. $this->getProfession().
            ', tem o salario '. $this->getSalary(). ', tem a idade de '. $this->getYear().
            ', é do sexo '. $this->getSex();
        }

        public function changeWork()
        {
            $this->working = ! $this->working;
        }

        public function getSector()
        {
            return $this->sector;
        }

        public function setSector($sc)
        {
            $this->sector = $sc;
        }

        public function getWorking()
        {
            return $this->working;
        }

        public function setWorking($w)
        {
            $this->working = $w;
        }

        public function getProfession()
        {
            return $this->profession;
        }

        public function setoProfession($p)
        {
            $this->profession = $p;
        }

        public function getSalary()
        {
            return $this->salary;
        }

        public function setSalary($s)
        {
            $this->salary = $s;
        }


    }
?>