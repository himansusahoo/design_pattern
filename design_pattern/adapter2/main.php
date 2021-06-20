<?php
namespace AdapterPattern;

include_once "./class/ChinaPlug.php";
include_once "./class/IndiaPlug.php";
include_once "./class/IndiaAdapter.php";
include_once "./class/ChinaAdapter.php";

$china=new ChinaPlug();
$india=new IndiaPlug();

class Charger{
    public function __construct(){

    }
    public function use_china_plug(ChinaPlugable $china){
        $china->china_plug();
    }
    public function use_india_plug(IndiaPlugable $india){
        $india->india_plug();
    }
}
$charger=new Charger();
$charger->use_china_plug($china);
$charger->use_india_plug($india);
$charger->use_india_plug(new IndiaAdapter($china));
$charger->use_china_plug(new ChinaAdapter($india));
?>