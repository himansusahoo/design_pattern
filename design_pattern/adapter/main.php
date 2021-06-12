<?php
include_once "./interface/InidaPlugModel.php";
include_once "./interface/USAPlugModel.php";

include_once "India.php";
include_once "USA.php";
include_once "IndoUSAPlug.php"; //Adapter


function use_india_plug(InidaPlugModel $india){
    $india->india_plug();
}

function use_usa_plug(USAPlugModel $usa){
    $usa->usa_plug();
}

use_india_plug(new India());
use_usa_plug(new USA);

use_usa_plug(new IndoUSAPlug(new india()));

?>