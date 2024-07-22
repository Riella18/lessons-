<?php

trait Display {
    public function display(){
        echo "Universitei: ". $this->s_name . ",Techer: {$this->fullname}\n";
    }
}

trait Show {
    public function display(){
        foreach($this->subjects as $index => $subjects){
            echo "Subject: " . $subjects . ", Grade: " . $this->grades[$index]. "\n";
        }
    }
}

class School{

    use Show;

    public $s_name = 'UNI';
    public $subjects = [];
    public $grades = [];

    public function setName($name){
        $this->s_name = $name;
    }

    public function addSubject($subject, $grade){
        $this->subjects[] = $subject;
        $this->grades[] = $grade;
    }


}

class Teacher extends School{

    use Display;

    public $fullname = '';

    public function __construct($fullname){
        $this->fullname = $fullname;
    }
}

class Pastruese extends School{

    use Display;

    public $fullname = '';

    public function __construct($fullname){
        $this->fullname = $fullname;
    }
}

class Drejtor extends School{

    use Display;

    public $fullname = '';

    public function __construct($fullname){
        $this->fullname = $fullname;
    }
}

class Absences extends School{
    public $firstsemester;
    public $secondsemester;

    public function __construct($firstsemester, $secondsemester){
        $this->firstsemester = $firstsemester;
        $this->secondsemester = $secondsemester;
    }

    public function display(){
            echo "Student number x was absent " . $this->firstsemester. " the first semester and " .$this->secondsemester . " the second semester. \n";  
        
    }
}

$teacherFinals = new School();
$teacherFinals -> addSubject("Math", 10);
$teacherFinals -> display(); 


$teacherFinals = new Teacher("Mr. Smith");
$teacherFinals->addSubject('Python',1);
$teacherFinals->setName('Canadesi');
$teacherFinals->display();


$teacherFinals = new Teacher("Mr. Smith2");
$teacherFinals->addSubject('Python',1);
$teacherFinals->setName('Canadesi');
$teacherFinals->display();

$teacherFinals = new Pastruese("Pastruese 1");
$teacherFinals->setName('Canadesi');
$teacherFinals->display();

$teacherFinals = new Drejtor("Drejtor 1");
$teacherFinals->setName('Canadesi');
$teacherFinals->display();

$teacherFinals = new Absences(5, 6);
$teacherFinals -> addSubject(5, 20);
$teacherFinals -> display();