<?php

namespace Biancalaura\ComposerPhp;

abstract class Animals
{
    private $weight;
    private $years;
    private $members;
    private $name;
    private $species;

    public abstract function walking();
    public abstract function eat();
    public abstract function talking();

    public function __construct($w, $y,$n, $s)
    {
        $this->weight = $w;
        $this->years = $y;
        $this->name = $n;
        $this->species = $s;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($w)
    {
        $this->weight = $w;
    }

    public function getYears()
    {
        return $this->years;
    }

    public function setYears($y)
    {
        $this->years = $y;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function setMembers($m)
    {
        $this->members = $m;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($n)
    {
        $this->name = $n;
    }

    public function getSpecies()
    {
        return $this->species;
    }

    public function setSpecies($s)
    {
        $this->species = $s;
    }
}
