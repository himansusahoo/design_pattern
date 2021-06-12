<?php
class Square
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }
}

class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;        
    }
}
class AreaCalculator
{
    private $element;
    private $area;

    public function __construct($object)
    {
        $this->element = $object;
    }

    public function calculate()
    {
        if (is_a($this->element, 'Circle')) {           
            $this->area = pi() * pow($this->element->radius, 2);            
        } else if (is_a($this->element, 'Square')) {            
            $this->area = pow($this->element->length, 2);
        }
        return $this->area;
    }
}
$circle=new Circle(10);
$areaCal = new AreaCalculator($circle);
echo $areaCal->calculate();

