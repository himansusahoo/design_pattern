<?php
namespace statepattern;
include_once "Tools.interface.php";

use statepattern\Tools;

class Brush implements Tools{
    public function mouseUp(){
        echo "Brush canvas<br>";
    }

    public function mouseDown(){        
        echo "Brush something<br>";
    }
}
?>
