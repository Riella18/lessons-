<?php
class Car{
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;

    }
}
$mycar = new Car("blue", "mclaren");
foreach($mycar as $x => $y) {
    echo "$x: $y"  . "\n";
}