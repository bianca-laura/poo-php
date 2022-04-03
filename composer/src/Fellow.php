<?php
namespace Biancalaura\ComposerPhp;
class Fellow extends Student
{
    private $fellowship;

    public function renewFellowship()
    {
        return 'bolsa renovada';
    }

    public function payMonthly()
    {
        return $this->getName(). ' é Bolsista! Então paga com desconto';
    }
    public function getFellowship()
    {
        return $this->fellowship;
    }
    
    public function setFellowship($f)
    {
        $this->fellowship = $f;
    }
}