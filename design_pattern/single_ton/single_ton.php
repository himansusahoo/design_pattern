<?php
class SingleTon
{
    private static $singleTon=null;
    public $data="";
    protected function __construct()
    {
    }
    protected function __clone()
    {
        echo "Object Cloning not allowed.";
        return null;
    }
    public function setData($data){
        $this->data=$data;
    }
    static function getInstance()
    {
        if (self::$singleTon == null) {
            self::$singleTon = new SingleTon();
        }
        return self::$singleTon;
    }
}
$object1 = Singleton::getInstance();
$object1->setData('himansu');
var_dump($object1);
$object2 = Singleton::getInstance();
var_dump($object2);

//$object3 = clone $object2; // throw fatal error on object cloning
//$object3->setData('puspa');
