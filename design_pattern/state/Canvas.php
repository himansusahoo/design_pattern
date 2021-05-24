<?php
namespace statepattern;
include_once "Tools.interface.php";
include_once "Brush.php";
include_once "Selection.php";

use statepattern\Tools;
use statepattern\{Selection,Brush};

class Canvas{
    private $Tool;
    public function __construct(){}

    public function setCurrentTool(Tools $tool){
        $this->Tool=$tool;
    }
    public function mouseUp()
    {
        $this->Tool->mouseUp();
    }
    public function mouseDown()
    {
        $this->Tool->mouseDown();
    }
}

$canvas=new Canvas();

$canvas->setCurrentTool(new Brush());
$canvas->mouseUp();
$canvas->mouseDown();

$canvas->setCurrentTool(new Selection());
$canvas->mouseUp();
$canvas->mouseDown();
?>