<?php
class Calculus{
    public $integrals;
    public $derivatives;
    
    public function add($integrals, $derivatives){
        $this->integrals = $integrals;
        $this->derivatives = $derivatives;
    }

    public function display() {
        
        echo $this->integrals . " is an integral, and it differs from the derivative " . $this->derivatives . "\n";

    }
}

$calculus = new Calculus;
$calculus -> add("(5x2 - 8x +5)dx", "f(x) = 6x3 - 9x + 4");
$calculus -> display(); 
