<?php

class ScoreGeneratingService 
{
    public static function calculateScores($students = [])
    {
        $score = 0;
        foreach($students as $student)
        {
            $score += $student->getScore();
        }

        return $score;
    }    


}