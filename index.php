<?php

class Book {
    public $title;
    private $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function display() {
        echo "Title         : " . $this->title . "\n";
        echo "Author        : " . $this->author . "\n";
    }
}

class Bookmanagement extends Book {
    private $name;
    private $ID;
    public $borrowedDate;
    public $returnDate;
    private $email;

    public function __construct($title, $author, $name, $ID, $borrowedDate, $returnDate, $email) {
        parent::__construct($title, $author);
        $this->name = $name;
        $this->ID = $ID;
        $this->borrowedDate = $borrowedDate;
        $this->returnDate = $returnDate;
        $this->email = $email;
    }

    public function getID() {
        return $this->ID;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function display() {
        parent::display();
        echo "Name          : " . $this->name . "\n";
        echo "ID            : " . $this->ID . "\n";
        echo "Borrowed Date : " . $this->borrowedDate . "\n";
        echo "Return Date   : " . $this->returnDate . "\n";
        echo "Email         : " . $this->email . "\n";
    }
}

$bookclass1 = new Bookmanagement("The adventures of Tom Sawyer", "Mark Twain", "Sara", 123, "02/01/2024", "04/02/2024");
$bookclass2 = new Bookmanagement("The three Musketeers", "Alexandre Dumas", "Claudia", 122, "05/05/2004", "04/07/2024");
$bookclass3 = new Bookmanagement("Oliver Twist", "Charles Dickens", "Mirela", 124, "03/04/2024", "04/05/2024"); 


$bookclass1 -> display();
echo "\n";
$bookclass2 -> display();
echo "\n";
$bookclass3 -> display(); 
echo "\n";


// }catch (Ifstatements $e){
//     echo "Error: " .$e->getMessage(); 
// }