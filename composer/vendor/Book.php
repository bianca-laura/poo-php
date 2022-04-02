<?php 
    require_once "Person.php";
    require_once "Publication.php";
    class Book implements Publication
    {
        private $title;
        private $author;
        private $totalPages;
        private $currentPages;
        private $open;
        private $reader;

        public function __construct (
            $t,
            $a,
            $p,
            $r){
                $this -> title = $t;
                $this -> author = $a;
                $this -> totalPages = $p;
                $this -> reader = $r;
                $this -> currentPages = 0;
                $this -> open = false;
        }

        public function details ()
        {
            echo "The book {$this->getTitle()}, written by author {$this->getAuthor()}, have {$this->getTotalPages()} ";
            echo "Total Pages, the curret Page is {$this->getCurrentPages()}, it is {$this->getOpen()},";
            echo "And the reader is ". $this->getReader()->getName();
        }

       

        public function getTitle()
        {
            return $this->title;
        }

        public function setTitle($t)
        {
            $this -> title = $t;
        }

        public function getAuthor()
        {
            return $this->author;
        }

        public function setAuthor($a)
        {
            $this->author = $a;
        }

        public function getTotalPages()
        {
            return $this->totalPages;
        }

        public function setTotalPages($p)
        {
            $this->totalPages = $p;
        }

        public function getCurrentPages()
        {
            return $this->currentPages;
        }

        public function setCurrentPages($c)
        {
            $this->currentPages = $c;
        }

        public function getOpen()
        {
            return $this->open;
            
        }

        public function setOpen($o)
        {
            $this->open = $p;
        }

        public function getReader()
        {
            return $this->reader;
        }

        public function setReader($r)
        {
            $this->reader = $r;
        }

        public function open()
        {
            $this->open = true;
        }

        public function close()
        {
            $this->open = false;
        }

        public function browse($p)
        {
            if($p > $this->totalPages){
                $this->currentPages = 0;
                return;
            }
            $this->currentPages = $p;
        }

        public function nextPages()
        {
            if($p > $this->totalPages){
                $this->currentPages = 0;
                return;
            } 
            $this -> currentPages ++;
            
            
        }

        public function backPages()
        {
            if($p > $this->totalPages){
                $this->currentPages = 0;
                return;
            }
            $this->currentPages --;
            
        }

    }
?>