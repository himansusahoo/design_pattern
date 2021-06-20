<?php
namespace AdapterPattern;

class IndiaAdapter implements IndiaPlugable{

    private $adapter;
    public function __construct(ChinaPlugable $china){
        $this->adapter=$china;
    }

    public function india_plug(){
        echo "India Plug charge<br>";
        $this->adapter->china_plug();        
    }
} 
?>