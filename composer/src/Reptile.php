<?php
namespace Biancalaura\ComposerPhp;

class Reptile extends Animals
{
    private $scalesColor;

    public function walking()
    {
        return 'Rastejando';
    }

    public function eat()
    {
        return 'Come Vegetais';
    }

    public function talking()
    {
        return 'Som de Reptil';
    }

    public function getScalesColor()
    {
        return $this->scalesColor;
    }

    public function setscalesColor($s)
    {
        $this->scalesColor = $s;
    }
}