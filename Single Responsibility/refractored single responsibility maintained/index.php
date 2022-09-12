<?php

require 'Models/Student.php';
require 'Models/NormalStudent.php';
require 'Models/ClassRepresentitive.php';
require 'Services/ScoreGeneratingService.php';
require 'Services/OutputService.php';
require 'Contracts/StudentSetScoreContracts.php';

$normalStudent1 = new NormalStudent('Naim', '1404111', 'A');
$normalStudent2 = new NormalStudent('Jamil', '1404112', 'A');
$normalStudent3 = new NormalStudent('Hasan', '1404113', 'A');
$normalStudent4 = new ClassRepresentitive('Akash', '1404001', 'A');

$normalStudent1->setScore(55); 
$normalStudent2->setScore(89); 
$normalStudent3->setScore(32); 
$normalStudent4->setScore(92);

$students = [
    $normalStudent1, 
    $normalStudent2, 
    $normalStudent3, 
    $normalStudent4
];

$totalScore = ScoreGeneratingService::calculateScores($students);

OutputService::outputSummedScore($totalScore);



