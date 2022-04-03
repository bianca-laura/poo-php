<?php

namespace Biancalaura\ComposerPhp;

class Teste
{
    public $name;

    public function details()
    {
        return 'O seu nome é '. $this->name;
    }
}