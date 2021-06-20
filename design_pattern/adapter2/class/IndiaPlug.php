<?php
namespace AdapterPattern;

include_once "./interface/IndiaPlugable.php";

class IndiaPlug implements IndiaPlugable{

    public function india_plug(){
        echo "India Plug charge.<br>";
    }
}
?>