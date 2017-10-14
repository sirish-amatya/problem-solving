<?php

/*
For a given array $arr, finds the first contiguous subarray whose sum matches $sum
If found, returns indexes else returns -1. 
*/
function subarray_sum($arr, $sum)
{
    $len = count($arr);
    $curr_sum = $arr[0];
    $found = false;
    $j = 0;
    for ($i=1; $i<$len; $i++) {

        $curr_sum = $curr_sum+$arr[$i];
  
        while ($curr_sum>$sum && $j<$i) {
        
            $curr_sum = $curr_sum-$arr[$j];
            $j++;
        }

        if ($curr_sum==$sum) {
        
            $found = true;
            $found_pos = "{$j}, {$i}";
            break;
        } 

    }
    return ($found)?$found_pos:-1;

}

print subarray_sum([1,2,3,4,5,7], 23);

?>
