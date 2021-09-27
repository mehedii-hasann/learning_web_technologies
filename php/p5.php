<?php
    $num = 10;
    while(true)
    {
        if($num==100)
        {
            break;
        }
        if($num%2 != 0)
        {
            echo $num."     ";
        }
        $num++;
    }
?>