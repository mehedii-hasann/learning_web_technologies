<?php
    $inp1 = readline("enter first number :");
    $inp2 = readline("enter second number :");
    $inp3 = readline("enter third number :");
    if($inp1>$inp2 && $inp1>$inp3)
    {
        echo $inp1." is largest number";
    }
    elseif ($inp2>$inp1 && $inp2>$inp3) 
    {
        echo $inp2." is largest number";
    } 
    else {
        echo $inp3." is largest number";
    }
?>