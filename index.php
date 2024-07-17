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

    public $subjects = [];
    public $grades = [];

    public function addSubject($subject, $grade){
        $this->subjects[] = $subject;
        $this->grades[] = $grade;
    }

    public function display(){
        foreach($this->subjects as $index => $subjects){
            echo "Subject: " . $subjects . ", Grade: " . $this->grades[$index]. "\n";
        }

    }
    
}
$finals = new school();
$finals->addSubject("Math", 1);
$finals->addSubject("python", 1);
$finals-> addSubject("science", 1);

$finals->display(); 

class Phone{
    public $iphonestype = [];
    public $year = [];
    public $androidtype = [];
    public $year1 = [];

    public function addphones($iphonestype, $year, $androidtype, $year1) {
        $this->iphonestype[] = $iphonestype;
        $this->year[] = $year;
        $this->androidtype[] = $androidtype;
        $this->year1[] = $year1;
    }
    public function display(){
        echo "iPhones: \n";
        foreach($this->iphonestype as $index=>$iphonestype){
        echo "Type: " .$iphonestype . ", Year: " . $this->year[$index] . "\n";
        }

        echo "Android phones: \n";
    
        foreach($this->androidtype as $index=>$androidtype){
        echo "Type: " .$androidtype . ", Year: ". $this->year1[$index] . "\n";
        }
    }

}

$phones =new Phone();
$phones ->addphones("iPhone 13", 2021, "Samsun Galaxy S21", 2021);
$phones ->addphones("iPhone 12", 2020, "Google pixel 6", 2021);
$phones->display();

class technology{
    public $name = [];
    public $numberofprogramminglang = [];
    public $langugesname = [];

    public function add($name, $numberofprogramminglang, $langugesname){
        $this->name[]= $name;
        $this->numberofprogramminglang[] = $numberofprogramminglang;
        $this ->langugesname[] = $langugesname;
    }

    public function display(){
        echo "Here are shown the languages of programming languages that each person knows: " . "\n"; 

        foreach($this-> name as $index=>$name){
            echo "Hi my name is " .$name. " I know " . $this -> numberofprogramminglang[$index]. " programming language(s) " .$this->langugesname[$index]. ".\n"; 
        }   

    }
    
}

$technology = new technology();
$technology ->add("Mirela", 1, "Python");
$technology ->add("Anna", 2, "Python, Java");
$technology-> add("Claudia",3, "PHP, JavaScript and CSS"); 
$technology -> display(); 

class work{
    public $jobname = [];
    public $hrsofworking = [];

    public function add($jobname, $hrsofworking){
        $this->jobname[] = $jobname;
        $this->hrsofworking[] = $hrsofworking;
    }

    public function display(){
        echo "Below are shown some job and the hrs that ppl work" ."\n";
        foreach($this->jobname as $index=>$jobname){
            echo "Type of Job: " .$jobname. "\n". "Hrs of working: " .$this->jobname[$index] . "\n";

        }

    }
    
}
$workk = new work();
$workk -> add("Programming", 8);
$workk -> add("data analyst ", 6);
$workk ->display();

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

    public function add($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function display(){
        echo $this->name . "\n";
        echo $this->color . "\n";

    }

}
$pear = new Fruits();
$pear -> add("pear", "blue");
$pear -> display();

class breakfast{
    public $typeoffood;
    public $timeyoueat;
    
    function __construct($typeoffood, $timeyoueat){
        $this->typeoffood = $typeoffood;
        $this->timeyoueat = $timeyoueat;
    }

    function __destruct() {
        echo "Usually for breakfast I like to eat {$this->typeoffood} at {$this->timeyoueat}." . "\n"; 
    }
}
$food = new breakfast("Scrambled eggs and fruits", "07:00");