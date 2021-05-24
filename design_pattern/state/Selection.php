<?php
namespace statepattern;
include_once "Tools.interface.php";

use statepattern\Tools;

class Selection implements Tools {
    public function mouseUp(){
        echo "Selection canvas<br>";        
    }

    public function mouseDown(){
        echo "Selection something<br>";
    }
}
?>