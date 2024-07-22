<?php
class Breakfast{
    public $typeoffood;
    public $timeyoueat;
    
    function __construct($typeoffood, $timeyoueat){
        $this->typeoffood = $typeoffood;
        $this->timeyoueat = $timeyoueat;
    }

    function __destruct() {
        echo " Usually for breakfast I like to eat {$this->typeoffood} at {$this->timeyoueat}." . "\n"; 
    }
}

class food extends Breakfast{
    public function message(){
        echo "what food do u eat? ";
    }
}
$food = new Food("Scrambled eggs and fruits", "07:00");
$food -> message(); 
unset($food); // destroy the $food object to trigger the destructor 
 