<?php
include_once "./interface/InidaPlugModel.php";
include_once "./interface/USAPlugModel.php";

include_once "USA.php";
include_once "India.php";

class IndoUSAPlug implements USAPlugModel {
    private $adaptee;

    public function __construct(InidaPlugModel $ind){
        $this->adaptee=$ind;
    }

    public function usa_plug(){
        echo "<br>Adapter:- INDO-USA<br>";
        echo 'USA Plug <br>';
        $this->adaptee->india_plug();
    }

}

?>