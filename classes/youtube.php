<?php

class User {
    public $username;
    private $email;

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){
        return "$this->email added a new friend";
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        if(strpos($email, "@") > -1){
            $this->email = $email; 
        }
    
    }

    public function display() {
        echo "Name: " . $this-> username . "\n";
        echo "Email: " . $this->getEmail() . "\n";
    }
}

class AdminUser extends User{

    public $level;

    public function __construct($username, $email, $level){
        $this->level = $level; 
        parent::__construct($username, $email);
    }
    public function display(){
        parent::display();
        echo "Level: " .$this ->level . "\n";
    }

}

class Age extends User{
    public $age;

    public function __construct($username, $email, $level, $age){
        $this -> age = $age;
        parent::__construct($username, $email, $level); 
    }

    public function display(){
        parent::display();
        echo "Age: ".$this->age . "\n";
    }
}
$userOne = new User("mirela", "mirela@");
$userTwo = new User("Claudia", "claudia@");
$userThree = new AdminUser("jdfh", "sdghf@", 5);
$userFour = new Age("ghf", "dsg@", 5, 10);

echo $userThree-> username . "\n";
echo $userThree-> getEmail() . "\n";
echo $userThree-> level . "\n";
echo $userFour-> age ."\n";

$userOne ->display();
echo "\n";
$userTwo->display();
echo "\n";
$userThree->display();
echo "\n";
$userFour->display(); 