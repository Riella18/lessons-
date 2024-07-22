<?php

class Book{
    public $title;
    private $author;

    public function __construct($title, $author){
        $this-> title = $title;
        $this->author = $author;
    } 

    public function getauthor(){
        return $this->author; 
    }

    public function display(){
        echo "Title: " .$this->title ."\n";
        echo "Author: " .$this->author ."\n";
    }
}

class Bookmanagement extends Book{
    private $name;
    private $ID;
    public $borroweddate;

    public function __construct($title, $author, $name, $ID, $borroweddate){
        $this ->name = $name;
        $this -> ID = $ID;
        $this-> borroweddate = $borroweddate;

        parent::__construct($title, $author);
    }

    public function getID(){
        return $this ->ID;
    }
    public function getname(){
        return $this -> name; 
    }

    public function display(){
        parent::display();
        echo "Name: " .$this->name . "\n";
        echo "ID: " .$this->ID . "\n";
        echo "Borrowed books: " . $this->borroweddate . "\n"; 
        
    }

}
$bookclass1 = new Bookmanagement("The adventures of Tom Sawyer", "Mark Twain", "Sara", 123, "02/03/2024");
$bookclass2 = new Bookmanagement("The three Musketeers", "Alexandre Dumas", "Claudia", 122, "05/06/2004");
$bookclass3 = new Bookmanagement("Oliver Twist", "Charles Dickens", "Mirela", 124, "03/04/2024"); 

$bookclass1 -> display();
echo "\n";
$bookclass2 -> display();
echo "\n";
$bookclass3 -> display(); 
echo "\n";
