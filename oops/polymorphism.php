<?php
declare(strict_types=1);

abstract class UiControl{
    public abstract function draw();
}

class TextBox extends UiControl{
    public function draw()
    {
        echo "Draw Text Box<br>";
    }
}

class Radio extends UiControl{
    public function draw()
    {
        echo "Draw Radio Button<br>";
    }
}

class Form{
    public function __construct(){}
        
    public static function UControl(UiControl $uc){       
        $uc->draw();
    }
}
$textBox=new TextBox();
Form::UControl($textBox);

$radioBox=new Radio();
Form::UControl($radioBox);

?>