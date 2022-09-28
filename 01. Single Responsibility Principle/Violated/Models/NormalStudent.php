<?php

class NormalStudent extends Student
{
    function __construct($name, $id, $section)
    {
        parent::__construct($name, $id, $section);
    }

    function getScore()
    {
        return $this->score;
    }

    function setScore($score)
    {
        $this->score =  $score + (($score * Student::NORMAL_BONUS) / 100);
    }
}