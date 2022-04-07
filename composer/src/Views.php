<?php
namespace Biancalaura\ComposerPhp;
class Views 
{
    private $viewer;
    private $movie;

    public function __construct($v, $m)
    {
        $this->viewer = $v;
        $this->movie = $m;
        $this->movie->setViews($this->movie->getViews() + 1);
        $this->viewer->setTotViews($this->viewer->getTotViews() + 1);

    }

    public function evaluate()
    {
        $this->movie->setEvaluation(5);
    }

    public function evaluateNote($note)
    {
        $this->movie->setEvaluation($note);
    }
    public function evaluatePercent($percent)
    {
        $new = 0;
        if($percent <= 20){
            $newNote = 3;
        }elseif($percent <= 50){
            $newNote = 5;
        }elseif($percent <= 90){
            $newNote = 8;
        } else {
            $newNote = 10;
        }
        $this->movie->setEvaluation($newNote);
    }

    public function getViewer()
    {
        return $this->viewer;
    }

    public function setViewer($v)
    {
        $this->v = $v;
    }

    public function getMovie()
    {
        return $this->movie;
    }

    public function setMovie($m)
    {
        $this->m = $m;
    }
}