<?php
/*
    1. Originator
    2. Memento
    3. Caretaker
*/
include_once "state.php";
include_once "history.php";

class Editor{
    private $content;
    public function __construct()
    {
        
    }
    
    public function createState(){
        return new State($this->content);
    }

    public function restore(State $state){
        $this->content=$state->getContent();        
    }

    public function setContent($content){
        $this->content=$content;
    }   
    public function getContent(){
        return $this->content;
    }

}
$editor = new Editor();
$history= new History();

$editor->setContent('Himansu');
$history->push($editor->createState());
echo $editor->getContent()."<br>";

$editor->setContent('Puspa');
$history->push($editor->createState());
echo $editor->getContent()."<br>";
$editor->restore($history->pop());

echo $editor->getContent()."<br>";
