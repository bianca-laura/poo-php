<?php
namespace Biancalaura\ComposerPhp;

class Wolf extends Animals
{
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
        return 'Auuuuuuuu';
    }
}