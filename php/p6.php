<?php
    $a = readline("number of arrray elements : ");
    echo "enter array elements : ";
    $arr = [];
    
    for($i=0;$i<$a;$i++)
    {
        
        $j = (int)readline();
        $arr[$i] = $j;
        
    }
    
    $s = (int)readline("enter a number to search in array :");
    
    $found = 0;
    for($i=0;$i<$a;$i++)
    {
        
        if($arr[$i] == $s)
        {
            echo $s." found...";
            $found = 1;
            break;
        }
    }
    if($found==0)
    {
        echo $s." not found...";
    }
    
?>