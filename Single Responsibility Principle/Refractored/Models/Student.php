<?php

abstract class Student implements StudentSetScoreContracts
{
    public const CR_BONUS = 10;
    public const NORMAL_BONUS = 0;

    protected $name;
    protected $id;
    protected $section;
    protected $score;

    function __construct($name, $id, $section)
    {
        $this->id      = $id;
        $this->name    = $name;
        $this->section = $section;
    }
}