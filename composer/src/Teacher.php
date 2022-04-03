<?php
namespace Biancalaura\ComposerPhp;
    class Teacher extends Person
    {
        private $specialties;
        private $salary;

        public function __contruct()
        {

        }

        public function details(){
            return $this->getName().', leciona o curso '. $this->getSpecialties().
            ', tem o salario '. $this->getSalary(). ', tem a idade de '. $this->getYear().
            ', é do sexo '. $this->getSex();
        }

        public function payRayse($payR)
        {
            $this->salary += $payR;
        }

        public function getSpecialties()
        {
            return $this->specialties;
        }

        public function setSpecialties($s)
        {
            $this->specialties = $s;
        }

        public function getSalary()
        {
            return $this->salary;
        }

        public function setsalary($sl)
        {
            $this->salary = $sl;
        }

        


    }
?>