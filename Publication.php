<?php 
    interface Publication
    {
        public function open();
        public function close();
        public function browse($p);
        public function nextPages();
        public function backPages();

    }
?>