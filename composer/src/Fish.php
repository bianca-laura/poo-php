<?php
namespace Biancalaura\ComposerPhp;

class Fish extends Reptile
{

    public function walking()
    {
        return 'Nadando';
    }

    public function eat()
    {
        return 'Comendo substancias';
    }

    public function talking()
    {
        return 'Peixe nao faz som';
    }

    public function blowingBubbles()
    {
        return 'Soltando Bolhas';
    }
}