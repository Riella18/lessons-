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
        echo "Title                 : " . $this->title . "\n";
        echo "Author                : " . $this->author . "\n";
    }
}

class Bookmanagement extends Book {
    private $name;
    private $ID;
    public $borrowedDate;
    public $returnDate;
    private $email;
    public $confirmationofthereturnedbook;

    public function __construct($title, $author, $name, $ID, $borrowedDate, $returnDate, $email, $confirmationofthereturnedbook) {
        parent::__construct($title, $author);
        $this->name = $name;
        $this->ID = $ID;
        $this->borrowedDate = $borrowedDate;
        $this->returnDate = $returnDate;
        $this->email = $email;
        $this-> confirmationofthereturnedbook = $confirmationofthereturnedbook;
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
    public function getconfirmationofthereturnedbook(){
        return $this->confirmationofthereturnedbook;
    }

    public function display() {
        parent::display();
        echo "Name                  : " . $this->name . "\n";

        if(is_numeric($this -> ID)> 12){
            echo "ID                    : " . $this->ID . "(This ID is wrong, please insert a valid ID card. )\n";
        } else{
            echo "ID                    : " .$this->ID ."\n";
        }
        echo "Borrowed Date         : " . $this->borrowedDate . "\n";
        echo "Return Date           : " . $this->returnDate . "\n";
        echo "Email                 : " . $this->email . "\n";
        echo "Is the book returned? : " . $this->confirmationofthereturnedbook ."\n";

//        echo "Debugging output: " . trim($this-> confirmationofthereturnedbook) . "\n"; 

        $status = trim($this -> confirmationofthereturnedbook);
        $status = rtrim($status, '.'); // removes whitespaces or other specified characters from the end of a string. 

        if (strcasecmp($status,"Not returned")== 0){
//      Performs a case- sensitive comparison, ensures that differences in letter casing won't affect the outcome.
            echo "Please return the book the date u signed to. \n"; 
        }
    }
    }

$bookclass1 = new Bookmanagement("The adventures of Tom Sawyer", "Mark Twain", "Sara", "123i", "02/01/2024", "04/02/2024", "sara@example", "Not returned.");
$bookclass2 = new Bookmanagement("The three Musketeers", "Alexandre Dumas", "Claudia", 122, "05/05/2004", "04/07/2024", "Claudia@example", "Returned");
$bookclass3 = new Bookmanagement("Oliver Twist", "Charles Dickens", "Mirela", 124, "03/04/2024", "04/05/2024", "mirela@example", "Not returned"); 


$bookclass1 -> display();
echo "\n";
$bookclass2 -> display();
echo "\n";
$bookclass3 -> display(); 
echo "\n";


// }catch (Ifstatements $e){
//     echo "Error: " .$e->getMessage(); 
// }

?>
