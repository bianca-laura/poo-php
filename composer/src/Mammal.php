<?php
namespace Biancalaura\ComposerPhp;

class Mammal extends Animals
{
    private $furColor;

   

    public function walking()
    {
        return 'Correndo';
    }

    public function eat()
    {
        return 'Mamando';
    }

    public function talking()
    {
        return 'Som de Mamifero';
    }


    public function getFurColor()
    {
        return $this->furColor;
    }

    public function setFurColor($f)
    {
        $this->furColor = $f;
    }
}