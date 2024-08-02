<?php

// Custom exception class with multiple properties
class BookManagementException extends Exception {
    private $title;
    private $author;
    private $name;
    private $ID;
    private $borrowedDate;
    private $returnDate;
    private $email;

    public function __construct(
        $message,
        $code = 0,
        $title = '',
        $author = '',
        $name = '',
        $ID = '',
        $borrowedDate = '',
        $returnDate = '',
        $email = '',
        Exception $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->title = $title;
        $this->author = $author;
        $this->name = $name;
        $this->ID = $ID;
        $this->borrowedDate = $borrowedDate;
        $this->returnDate = $returnDate;
        $this->email = $email;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getName() {
        return $this->name;
    }

    public function getID() {
        return $this->ID;
    }

    public function getBorrowedDate() {
        return $this->borrowedDate;
    }

    public function getReturnDate() {
        return $this->returnDate;
    }

    public function getEmail() {
        return $this->email;
    }
}

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

    public function __construct($title, $author, $name, $ID, $borrowedDate, $returnDate, $email = '') {
        parent::__construct($title, $author);

        // Validation and exception throwing
        if (empty($title) || empty($author) || empty($name) || empty($ID)) {
            throw new BookManagementException(
                "Required fields are missing",
                1,
                $title,
                $author,
                $name,
                $ID,
                $borrowedDate,
                $returnDate,
                $email
            );
        }

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

try {
    $bookclass1 = new Bookmanagement("The adventures of Tom Sawyer", "Mark Twain", "Sara", 123, "02/01/2024", "04/02/2024", "sara@example.com");
    $bookclass2 = new Bookmanagement("The three Musketeers", "Alexandre Dumas", "Claudia", 122, "05/05/2004", "04/07/2024", "claudia@example.com");
    $bookclass3 = new Bookmanagement("Oliver Twist", "Charles Dickens", "Mirela", 124, "03/04/2024", "04/05/2024"); // Email is optional
} catch (BookManagementException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Title         : " . $e->getTitle() . "\n";
    echo "Author        : " . $e->getAuthor() . "\n";
    echo "Name          : " . $e->getName() . "\n";
    echo "ID            : " . $e->getID() . "\n";
    echo "Borrowed Date : " . $e->getBorrowedDate() . "\n";
    echo "Return Date   : " . $e->getReturnDate() . "\n";
    echo "Email         : " . $e->getEmail() . "\n";
    exit; // Stop execution if an exception is caught
}

// Display information if no exception is thrown
$bookclass1->display();
echo "\n";
$bookclass2->display();
echo "\n";
$bookclass3->display();
echo "\n";

?>
