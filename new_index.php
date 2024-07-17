<?php

require 'loops.php';

class Phone {
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

    public function display() {
        echo "iPhones: \n";
        foreach ($this->iphonestype as $index => $iphonestype) {
            echo "Type: " . $iphonestype . ", Year: " . $this->year[$index] . "\n";
        }

        echo "\nAndroid Phones: \n";
        foreach ($this->androidtype as $index => $androidtype) {
            echo "Type: " . $androidtype . ", Year: " . $this->year1[$index] . "\n";
        }
    }
}

// Example usage
$phones = new Phone();
$phones->addphones("iPhone 13", 2021, "Samsung Galaxy S21", 2021);
$phones->addphones("iPhone 12", 2020, "Google Pixel 6", 2021);

// Displaying phone types and years
$phones->display();
