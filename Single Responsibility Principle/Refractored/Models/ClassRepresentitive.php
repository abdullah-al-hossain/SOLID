<?php

class ClassRepresentitive extends Student
{
    function __construct($name, $id, $section)
    {
        parent::__construct($name, $id, $section);
    }

    function getScore()
    {
        return $this->score;
    }

    function setScore($score): void
    {
        $this->score =  $score + (($score * Student::CR_BONUS) / 100);
    }
}