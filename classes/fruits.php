<?php
class Fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this-> name = $name;
        $this-> color =$color;
    }

    function get_name() {
        return $this-> name;
    }
    function get_color() {
        return $this->color;
    }

}
$apple = new Fruit("Apple", "red");
echo $apple-> get_name() . "\n";
echo $apple->get_color() . "\n"; 

class Fruits{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}. " . "\n";
    }
}

//strawberry is inherited from Fruit
class Strawberry extends Fruits {
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry-> message();
$strawberry-> intro();

class Bags{
    public $size;  
    public $year;

    public function __construct($size, $year){
        $this->size = $size;
        $this->year = $year;
    }

    public function intro(){
        echo "My  bag is " .$this->size. " and it is made on " .$this->year . ". " . "\n";
    }    
}

class Guess extends Bags{
    public function message(){
        echo "What size and year is ur bag? ";
    }
}

$bag = new Guess("small size", 2005);
$bag -> message();
$bag -> intro(); 

