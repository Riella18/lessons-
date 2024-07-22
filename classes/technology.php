<?php
class Technology{
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

$technology = new Technology();
$technology ->add("Mirela", 1, "Python");
$technology ->add("Anna", 2, "Python, Java");
$technology-> add("Claudia",3, "PHP, JavaScript and CSS"); 
$technology -> display(); 
