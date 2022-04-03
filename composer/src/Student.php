<?php
namespace Biancalaura\ComposerPhp;
    class Student extends Person
    {
        private $registration;
        private $course;

        public function __contruct()
        {

        }

        public function details(){
            return $this->getName().', com a matricula no curso de '. $this->getCourse().
            ' tem o numero de matricula '. $this->getRegistration(). ', tem a idade de '. $this->getYear().
            ' e é do sexo '. $this->getSex();
        }

        public function cancelRegistration()
        {
            echo '<p> Matricula será cancelada </p>';
        }

        public function payMonthly()
        {
            return 'Pagando mensalidade do aluno '. $this->getName();
        }


        public function getRegistration()
        {
            return $this->registration;
        }

        public function setRegistration($r)
        {
            $this->registration = $r;
        }

        public function getCourse()
        {
            return $this->course;
        }

        public function setCourse($c)
        {
            $this->course = $c;
        }

        


    }
?>