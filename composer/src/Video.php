<?php
namespace Biancalaura\ComposerPhp;
class Video implements ActionVideoInterfase
{
    private $title;
    private $evaluation;
    private $views;
    private $likes;
    private $playing;

    public function __construct($t)
    {
        $this->title = $t;
        $this->evaluation = 1;
        $this->views = 0;
        $this->likes = 0;
        $this->playing = false;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($t)
    {
        $this->title = $t;
    }

     public function getEvaluation()
    {
        return $this->evaluation;
    }

    public function setEvaluation($e)
    {
        $media = ($this->evaluation + $e) / $this->views;
        $this->evaluation = $media;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function setViews($v)
    {
        $this->views = $v;
    }

    public function getLikes()
    {
        return $this->likes;
    }

    public function setLikes($l)
    {
        $this->likes = $l;
    }

    public function getPlaying()
    {
        return $this->playing;
    }

    public function setPlaying($p)
    {
        $this->playing = $p;
    }

    public function play()
    {
        $this->playing = true;
    }   
    public function pause()
    {
        $this->playing = false;
    }
    public function like()
    {
        $this->like ++;
    }
}