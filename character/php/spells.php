<?php

function level1Spells ($level)
{
    $spells = "-";
    
    if($level == 2)
    {
        $spells = "1";
    }
    else if($level >= 3 && $level <= 6)
    {
        $spells = "2";
    }
    else if($level >= 7 && $level <= 10)
    {
        $spells = "3";
    }
    else if($level >= 11 && $level <= 15)
    {
        $spells = "4";
    }
    else if($level >= 16 && $level <= 18)
    {
        $spells = "5";
    }
    else if($level >= 19)
    {
        $spells = "6";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level2Spells ($level)
{
    $spells = "-";
    
    if($level == 4)
    {
        $spells = "1";
    }
    else if($level >= 5 && $level <= 8)
    {
        $spells = "2";
    }
    else if($level >= 9 && $level <= 11)
    {
        $spells = "3";
    }
    else if($level >= 12 && $level <= 16)
    {
        $spells = "4";
    }
    else if($level >= 17)
    {
        $spells = "5";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level3Spells ($level)
{
    $spells = "-";
    
    if($level == 6)
    {
        $spells = "1";
    }
    else if($level >= 7 && $level <= 10)
    {
        $spells = "2";
    }
    else if($level >= 11 && $level <= 13)
    {
        $spells = "3";
    }
    else if($level >= 14 && $level <= 19)
    {
        $spells = "4";
    }
    else if($level == 20)
    {
        $spells = "5";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level4Spells ($level)
{
    $spells = "-";
    
    if($level == 8)
    {
        $spells = "1";
    }
    else if($level >= 9 && $level <= 12)
    {
        $spells = "2";
    }
    else if($level >= 13 && $level <= 17)
    {
        $spells = "3";
    }
    else if($level >= 18)
    {
        $spells = "4";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level5Spells ($level)
{
    $spells = "-";
    
    if($level == 10)
    {
        $spells = "1";
    }
    else if($level >= 11 && $level <= 14)
    {
        $spells = "2";
    }
    else if($level >= 15)
    {
        $spells = "3";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level6Spells ($level)
{
    $spells = "-";
    
    if($level == 12)
    {
        $spells = "1";
    }
    else if($level >= 13 && $level <= 17)
    {
        $spells = "2";
    }
    else if($level >= 18)
    {
        $spells = "3";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}




?>