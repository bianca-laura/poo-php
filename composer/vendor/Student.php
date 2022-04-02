<?php
    class Student
    {
        private $registration;
        private $course;

        public function __contruct()
        {

        }

        public function cancelRegistration()
        {

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
            $this->registration = $c;
        }

        


    }
?>