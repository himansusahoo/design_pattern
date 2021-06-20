<?php
class Test{
	public $name;
    static public function show(){
    	//self::name="himansu";
        return $this->name;
    }
}
$obj=new Test();
//$obj->show();
Test::show();
?>