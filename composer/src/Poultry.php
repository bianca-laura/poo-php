<?php
namespace Biancalaura\ComposerPhp;

class Poultry extends Animals
{
    private $penaltiesColor;

    public function walking()
    {
        return 'Voando';
    }

    public function eat()
    {
        return 'Comendo Frutas';
    }

    public function talking()
    {
        return 'Som de Ave';
    }

    public function makeNest()
    {
        return 'Construindo Ninho';
    }

    public function getPenaltiesColor()
    {
        return $this-penaltiesColor;
    }

    public function setPenaltiesColor($p)
    {
        $this->penaltiesColor = $p;
    }
}