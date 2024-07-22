<?php
class Clothes{
    public $zara = [];
    public $vittoun= [];
    public $jewelery = [];
    public $nikes = [];
    public $bags = [];

    public function __construct($zara, $vittoun, $jewelery, $nikes, $bags){
        $this -> zara = $zara;
        $this -> vittoun = $vittoun;
        $this -> jewelery = $jewelery;
        $this -> nikes = $nikes;
        $this -> bags = $bags;
    }
    public function display(){
        echo "Zara items" ."\n";
        foreach($this -> zara as $item){
            echo "- $item\n";
        }

        echo "Vittoun items" . "\n";
        foreach($this-> vittoun as $item){
            echo "- $item\n";
        }

        echo "Jewlery items" . "\n";
        foreach($this-> jewelery as $item){
            echo "- $item\n";
        }

        echo "Nikes items" ."\n";
        foreach($this-> nikes as $item){
            echo "- $item\n";
        }

        echo "Bags items" ."\n";
        foreach($this-> bags as $item){
            echo "- $item\n";
        }
    }
}

class Defacto extends Clothes{
    public function message(){
        echo "What kind of brands do u wear? \n";

    }
}

$zaraitems = ["shirts", "Pants", "Jacket"];
$vittounitems = ["wallet", "Handbag"];
$jeweleryitems = ["ring", "necklace"];
$nikesitems = ["sneakers", "running shoes"];
$bagsitems = ["backpack", "tote"];

$items = new Clothes($zaraitems, $vittounitems, $jeweleryitems, $nikesitems, $bagsitems);
$defactoItems = new Defacto($zaraitems, $vittounitems, $jeweleryitems, $nikesitems, $bagsitems);

echo "My friend always buys " . implode(", ", $items->zara). " from Zara \n";
$defactoItems -> message(); 
$items -> display(); 
