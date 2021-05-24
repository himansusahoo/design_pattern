<?php
namespace sort;
include_once "log.php";

/*
    1. Consider the first element as Pivot.
    2. Find the partition element consider left element < partition element < right element
    3. do sort the left and right array.

*/
$arr = array(1,10, 16, 8, 12, 15, 6, 3, 9, 5, 11);
pmo($arr);
$low = 0;
$high = count($arr)-1;
quick_sort($low,$high,$arr);
pmo($arr);


function quick_sort($low,$high,&$arr){
    if($low<$high){
        $j=partition($low,$high,$arr);
        quick_sort($low,$j,$arr);
        quick_sort($j+1,$high,$arr);
    }
}

function partition($low,$high,&$arr)
{
    $i = $low;
    $j = $high;
    $pivot=$arr[$low];

    while ($i < $j) {
        while ($arr[$i] < $pivot){
            $i++;
        }
        while ($arr[$j] > $pivot){
            $j--;
        }

        if ($i <$j) {
            $arr=swap($i, $j, $arr);
        }        
    }
    $arr=swap($i, $j, $arr);
    return $j;
}

function swap($i, $j, $arr){
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
    return $arr;
}

