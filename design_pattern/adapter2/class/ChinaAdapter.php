<?php
namespace AdapterPattern;

class ChinaAdapter implements ChinaPlugable{

    private $adapter;
    public function __construct(IndiaPlugable $india){
        $this->adapter=$india;
    }

    public function china_plug(){
        echo "China Plug charge<br>";
        $this->adapter->india_plug();        
    }
} 
?>