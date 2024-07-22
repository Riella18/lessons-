<?php
// user contact management

require "school.php";
trait Displayy {
    public function display(){
        echo "Fullname: " .$this->name. ' ' .$this->surname. "\n";
        echo "Phone nuumber: " .$this->phonenumber ."\n";
        echo "Email: " .$this->email. "\n";
        echo "Fav sport: " .$this->sports."\n";
        echo "Fav book genre: " .$this->reading."\n";
        echo "Fav instrument: " .$this->instrument. "\n";
    }
    
}

class Maininformations{
    use Displayy;
    public $name;
    public $surname;
    public $phonenumber;
    public $email;
    public $sports;
    public $reading;
    public $instrument; 

    public function __construct($name, $surname, $phonenumber, $email, $sports, $reading, $instrument){  
        $this ->name = $name;
        $this -> surname =$surname;
        $this -> phonenumber= $phonenumber;
        $this -> email = $email;
        $this -> sports = $sports;
        $this-> reading = $reading;
        $this->instrument = $instrument;
    }
} 


class Hobby extends Maininformations{
    use Displayy;
    public $sports;
    public $reading;
    public $instrument; 

    public function __construct($sports, $reading, $instrument)
    {
        $this->sports = $sports;
        $this-> reading = $reading;
        $this->instrument = $instrument;
    }

}


$maininfors= [];
// $maininfors[] = new Maininformations("Mirela", " Neziri", 123, "mirela@", "volley", "criminal", "guitar");
$hobby = new Hobby('test','teswt','test');
if(isset($hobby)){
    $maininfors[] = new Maininformations("gdsa", "gds", 56, "sdrg", $hobby->sports, $hobby->reading, $hobby->instrument);
}

// display all the contacts
foreach($maininfors as $maininfos){
    $maininfos -> display();
}
