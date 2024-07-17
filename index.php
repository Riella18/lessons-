<?php

require 'loops.php';

class car{
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;

    }
}
$mycar = new car("blue", "mclaren");
foreach($mycar as $x => $y) {
    echo "$x: $y"  . "\n";
}

class school{
    public $subject;
    public $grade;
    public function __construct($subject, $grade){
        $this->subject = $subject;
        $this->grade = $grade;
    }
    
}
$finals = new school("math", 10);
foreach($finals as $x => $y){
    echo "$x: $y" . "\n";
}