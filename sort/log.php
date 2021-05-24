<?php
namespace sort;

function pmo($ele,$msg='',$exit=0){
    if(is_object($ele)){
        var_dump($ele);
    }else if(is_array($ele)){
        echo "<pre>";
        if($msg){
            echo $msg;
        }
        print_r($ele);
        echo "</pre>";
    }else {
        if($msg){
            echo $msg." ".$ele."<br>";;
        }else{
            echo $ele."<br>";
        }        
    }
    if($exit){
        exit('exit');
    }
}

?>