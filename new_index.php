<?php

require 'loops.php';


class HandleException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

function askQuestion($question) {
    echo $question . " (type 'exit' to quit)\n";
    return trim(fgets(STDIN));
}

function validateIDCard($IDcards) {
    if (strlen($IDcards) > 22) {
        throw new InvalidArgumentException("The ID card number must be shorter than 22 characters!\n");
    }
    if (!preg_match("/^[a-zA-Z0-9]+$/", $IDcards)) {
        throw new InvalidArgumentException("The ID card number must only contain letters and numbers!\n");
    }
}

function validateName($name) {
    if (empty($name)) {
        throw new HandleException("Name cannot be empty!\n");
    }
    if (!is_string($name) || !preg_match("/^[a-zA-Z\s]+$/", $name)) {
        throw new HandleException("Name must only contain letters and spaces!\n");
    }
}

function validateTravelDestination($destination) {
    if (empty($destination)) {
        throw new HandleException("Travel destination cannot be empty!\n");
    }
    if (!is_string($destination) || !preg_match("/^[a-zA-Z\s]+$/", $destination)) {
        throw new HandleException("Travel destination must only contain letters and spaces!\n");
    }
}

// Function to handle user input with exit option
function handleUserInput($question, $validationFunction) {
    while (true) {
        try {
            $input = askQuestion($question);
            if (strtolower($input) === 'exit') {
                echo "Exiting...\n";
                exit;
            }
            $validationFunction($input);
            return $input;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

// Main program loop
while (true) {
    // Validate ID card number
    $IDcards = handleUserInput("What's your ID card number?", 'validateIDCard');
    echo "My ID card number is " . $IDcards . "\n";

    // Validate name
    $name = handleUserInput("What's your name?", 'validateName');
    echo "My name is " . $name . "\n";

    // Validate travel destination
    $whereWillYouTravel = handleUserInput("Where are you traveling today?", 'validateTravelDestination');
    echo "I am traveling to " . $whereWillYouTravel . "\n";

    // Ask the user if they want to continue or exit
    $continue = askQuestion("Do you want to continue? (yes/no)");
    if (strtolower($continue) !== 'yes') {
        echo "Exiting...\n";
        break;
    }
}
?>


