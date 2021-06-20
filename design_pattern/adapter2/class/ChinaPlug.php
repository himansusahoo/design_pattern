<?php
namespace AdapterPattern;

include_once "./interface/ChinaPlugable.php";

class ChinaPlug implements ChinaPlugable{

    public function china_plug(){
        echo "China Plug charge.<br>";
    }
}
?>