<?php

function divide($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero", 1);
    }
    return $dividend / $divisor;
  }
  
  try {
    echo divide(5, 0);
  } catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code] $message .\n";
  }

function inverse($x){
    if (!$x) {
        throw new Exception('Division by zero');
    }

    return 1/$x;
}

try{
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
}  catch (Exception $e) {
    echo 'Caught exception: ' , $e->getMessage(), "\n";
}

// continue
echo "Hello world\n";


function checkNumber($num){
    if ($num >= 1){
    throw new Exception("Value must be less than 1 \n");
}

return true;
}

try{
    checkNumber(-1);
    echo "if u see this text, the passed value is less than 1  \n"; 
}

catch (Exception $e){
    echo "exception message: " .$e ->getMessage();
}

function age($age){
    if ($age >= 65){
        throw new Exception("U old enough to work, go and rest \n ");
    } else{
        echo "u young enough to work \n"; 
    } 
    
return true;
}

try{
    age (62);

}

catch (Exception $e){
    echo "exeption message: " .$e ->getMessage();
}


class DividebyzeroException extends Exception{}
class DividebynegnoExeption extends Exception{}
function checkdevisor ($dividend, $divisor){
    try{
        if ($divisor == 0){
            throw new DividebyzeroException();
        } else if ($divisor <0){
            throw new DividebynegnoExeption;
        } else {
            $result = $dividend/$divisor;
            echo  $dividend . " divided by " . $divisor . " is equal to ". $result. ".\n";
    }
}
catch (DividebyzeroException $dze) {
    echo "Divide by Zero Exception \n";
}
catch(DividebynegnoExeption $dnne){
    echo "Divide by neg number exception \n";
}
catch (Exception $ex){
    echo "unknown Exeption \n";
}
}

checkdevisor(18, 3); 
checkdevisor(27, 0);
checkdevisor(5, -3);

function problem($x) {
    if (is_string($x)) {
        return "Error";
    }
    return ($x * 50) + 6;
}

// Example usage:
echo problem(2);     // Outputs: 106
echo "\n";
echo problem('test'); // Outputs: Error
echo "\n";
echo problem(10); 


function dnaToRna($dna) {
    // Replace all occurrences of 'T' with 'U'
    $rna = str_replace('T', 'U', $dna);
    return $rna;
}

// Test examples
echo "\n" . dnaToRna("GCAT"); // Outputs "GCAU"
echo "\n";
echo dnaToRna(""); // Outputs an empty string
echo "\n";
echo dnaToRna("GCGCATTA"); // Outputs "GCGCAUUA"


try {
    throw new Exception(" \n An error ocurred ", 120);

} catch (Exception $e) {
    echo "\n Error code: " . $e -> getCode();
}

try {
    throw new Exception("An error occured");

}catch (Exception $e) {
    echo "Error in this file: " . $e -> getFile();
}

function myFunction($num) {
    throw new Exception("An error occurred");
  }
  
  try {
    myFunction(5);
  } catch (Exception $e) {
    print_r($e->getTrace());
  }

//   class CustomException extends \Exception {}

//   function dosthrisky($value){
//     if(!is_numeric($value)) {
//         throw new \InvalidArgumentException("value must be numeric. ");
//     }
//     if ($value < 0){
//         throw new CustomException("Neg values are not allowed. ");
//     }
//     if ($value > 100){
//         throw new \Exception("value is too large");
//     }

//     return "Value is within the acceptable range. ";
//   }


//     $values= [-5, 50, 300];
//     foreach($values as $value){
//      try{ 
//         $result = dosthrisky($value);
//         echo "result for value $value: " .$result . "\n";
    
//   } catch (\InvalidArgumentException $e) {
//     echo "Invalid argument: " . $e->getMessage();
//   } catch (CustomException $e) {
//     echo "Custom error: " . $e-> getMessage();
//   } catch(\Exception $e) {
//     echo "An error occurred: " .$e ->getMessage();
//   }
// }

class FileNotExistException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

function readDataFromFile($filename) {
    if (!file_exists($filename)) {
        throw new FileNotExistException("File does not exist: $filename");
    }
    
    // Read data from the file and return it
    $data = file_get_contents($filename);
    return $data;
}

try {
    $filename = "arrays.php";
    $data = readDataFromFile($filename);
    echo "Data from $filename: " . $data;
} catch (FileNotExistException $e) {
    echo "An error occurred: " . $e->getMessage();
}


class ReadfileException extends Exception{
    public function __construct($msg, $code=0, Throwable $previous = null){
        parent:: __construct($msg, $code, $previous);
    }
    public function __toString(){
        return __CLASS__. ": [{$this->code}] : {$this->message} \n";
    }
}

function ReadData($name){
    if(!file_exists($name)){
        throw new CustomException("This file does not exist. \n" .$name);
    }

    $datas = file_get_contents($name); 
    return $datas;
}

try{
    $name = "php.test";
    $datas = ReadData($name);
    echo "Data from $name: " . $datas;
}catch (CustomException $e) {
    echo "Error: " . $e ->getMessage();
}

// Write a PHP program that demonstrates the basic usage of try-catch blocks to handle exceptions.
class CustomException extends Exception {}
class PhpprogramException extends Exception{}

function TryCatchusage($values){
    if (!is_string($values)){
        throw new InvalidArgumentException("Please insert a string! \n");
    }

    if (strlen($values) >= 10){
        throw new CustomException("String must be lower or equal to 10 \n");
    }
    if(strlen($values) <= 0 ){
        throw new PhpprogramException("Please type something! \n");
    }

}

try {
    $values = "" ;
    $result = TryCatchusage($values);
    echo "The word is: $values " .$result . "\n";
}catch (InvalidArgumentException $e){
    echo "\n Error: \n" . $e->getMessage();
} catch (CustomException $e){
    echo "Please: \n" . $e->getMessage();
}catch (PhpprogramException $e){
    echo "U can't leave it empty \n" .$e->getMessage();
}catch (Exception $e) {
    echo "General Exception: " . $e->getMessage() . "\n";
}

// Write a PHP program that implements a PHP function that divides two numbers but throws an exception if the denominator is zero.
$divisions = [
    ['numerator' => 10, 'denominator' => 5],
    ['numerator' => 4, 'denominator' => 0],
]; 
foreach($divisions as $division){
    try {
        if($division['denominator'] == 0){
            throw new Exception("Division by 0 is not allowed, please insert another number. \n") ;
        }
        $result = $division["numerator"]/$division["denominator"]; 
        echo "Result of division {$division['numerator']} by {$division['denominator']}: " . $result . "\n";
    }catch (Exception $e){
        echo "Error: " .$e->getMessage();
    }

}

// Write a PHP function that takes a string as input and throws an exception if the string is empty.

function throwException($string){
    if (!is_string($string)){
        throw new Exception("Please insert a string ! \n");
    }
    if (strlen($string) <= 0){
        throw new Exception("It is empty, Please write sth! \n");
    }
}

try{
    $string = "";
    throwException($string);
    echo "The string typed is: " .$string ; 
}catch (Exception $e){
    echo "empty: " .$e ->getMessage()."\n";
}

//  Write a PHP program that implements multiple catch blocks to handle different types of exceptions
try{
    $number = "abc";
    if(!is_numeric($number)){
        throw new InvalidArgumentException("Invalid number.");
    }
    $result = 100 / $number;
    echo "Result: ".$result ."\n";
}catch(InvalidArgumentException $e){
    echo "InvalidArgumentException: " . $e->getMessage(); 
}catch (DivisionByZeroError $e){
    echo "Division by zero error: " .$e->getMessage();
}catch (Throwable $e) {
    echo "An error occurred: " . $e->getMessage();
}

class DatabaseConnectionException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

function connectToDatabase($host, $username, $password, $database) {
    // Simulate a database connection attempt
    $success = false;

    // Check if the connection was successful
    if (!$success) {
        throw new DatabaseConnectionException("Failed to connect to the database.");
    }

    // Return the database connection object if successful
    return "databaseConnection";
}

try {
    $host = "localhost";
    $username = "root";
    $password = "password";
    $database = "database";

    $databaseConnection = connectToDatabase($host, $username, $password, $database);
    echo "Database connection successful!";
} catch (DatabaseConnectionException $e) {
    echo "An error occurred: " . $e->getMessage();
}

class LibraryDatabaseException extends Exception{
    public function __construct($message, $code=0, Throwable $previous=null){
        parent :: __construct($message, $code, $previous);        
    }

    public function __toString(){
        return __CLASS__. ": [{$this->code}]: {$this->message}\n"; 
    }
}

function pplinfosdatabase($name, $surname, $IDcard, $telephonenumber){
    $success = true;
    
    if(!$success){
        throw new LibraryDatabaseException("Failed \n");
    }

    return "databaseconnected";
}


try{
    $name = "Mirela";
    $surname = "Neziri";
    $IDcard = 123;
    $telephonenumber = 456;


    $databaseconneced = pplinfosdatabase($name, $surname, $IDcard, $telephonenumber);
        echo "\nDatabase connected succesfully \n";
    }catch  (LibraryDatabaseException $e){
        echo "\nUr database is not connected: " . $e->getMessage();
    }

    // Write a PHP program that uses a try-catch block to handle a specific exception and performs specific actions based on the exception type.

    class HandleException extends Exception{
        public function __construct($message, $code=0, Throwable $previous=null){
            parent :: __construct($message, $code, $previous);
        }
        public function __toString(){
            return __CLASS__. ": [{$this->code}]: {$this->message}\n"; 
        }
    }

    function askQuestion($question){
        echo $question . " "; 
        return trim(fgets(STDIN));
    }

   
        $IDcards = askQuestion("What's ur ID card number ? \n");
        echo "My ID card number is " . $IDcards . "\n ";

        $name = askQuestion("What's ur name? \n");
        echo "My name is " . $name . "\n";
        $wherewillutavel= askQuestion("Where are you traveling today? \n");
        echo "I am traveling in " .$wherewillutavel ."\n"; 
    

    try{
        if (strlen($IDcard)> 22){
            throw new InvalidArgumentException("The number must be lower than 22! \n" );
        }
        if (!is_string($name)|| empty($name)){
            throw new HandleException("Please insert ur name using string not numbers! \n");
        }
        if (empty($wherewillutavel)){
            throw new Exception("Please, you must type something! \n");
        }
    }catch(InvalidArgumentException $e){
        echo "Error: " . $e -> getMessage(); 
    }catch(HandleException $e){
        echo "Error: " . $e ->getMessage();
    }catch(Exception $e){
        echo "Error: " . $e ->getMessage(); 
    }