<?php
//Caretaker:-

class History{
    private $data=array();
    private $state;
    public function __construct()
    {
        
    }

    public function push($data){      
        array_push($this->data,$data);
    }

    public function pop(){
        array_pop($this->data);       
        $last= end($this->data);
        return $last;
    }
}
