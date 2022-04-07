<?php
namespace Biancalaura\ComposerPhp;
class Gafanhotos extends Person
{
    private $login;
    private $totViews;
    
    public function __construct(
        $name,
        $year,
        $sex,
        $login){
            parent::__construct($name,$year,$sex);
            $this->login = $login;
            $this->totViews = 0;
        }
    public function seeMoreOne()
    {
        $this->totViews ++;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($l)
    {
        $this->login = $l;
    }

    public function getTotViews()
    {
        return $this->totViews;
    }

    public function setTotViews($t)
    {
        $this->totViews = $t;
    }
}