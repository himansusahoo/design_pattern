<?php
$arr=array(10,9,8,7,3,2,1);
$arr_len=count($arr);

for($i=0; $i<$arr_len; $i++){
    for($j=0; $j<($arr_len-1);$j++){
        if($arr[$j]>$arr[$j+1]){
            $temp=$arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1]=$temp;
        }        

    }
}
print_r($arr);

?>