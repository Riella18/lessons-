<?php

$arr = [1,2,3];

foreach($arr as $a) {
    echo $a ."\n";
}

$i = 1;
while ($i <= 6) {

    echo $i ."\n";
    $i ++ ;
}

$m = 5;
while ($m < 9) {
    if ($m == 8) break;
    echo $m . "\n";
    $m ++;
}

$x = "Mirela";
if ($x == "Mirela") {
    echo "U found my name" . "\n";
} else {
    echo "Try another name";
}

$y = "linux";
if ($y == "linux") {
    echo "Correct" . "\n";
} else{
    echo "Wrong";
}


$s = 1;
while ($s < 10){
    echo $s ."\n";
    $s ++;
}

$number = 5;
$factorial = 1;
while($number>0) {
    $factorial *= $number;
    $number--; 
}
echo "factorial: $factorial \n";

$total = 0;
$number = 0;

while($number < 10){
    if($number %2 ==0){
        $total = $total + $number;
    }
    $number ++;
}
echo "sum of even numbers ".$total ."\n";

$correctpassword = "Mirela";
while($password !== $correctpassword){
    echo"Please enter your password: \n";

    $password = trim(fgets(STDIN));

    if($password!==$correctpassword){
        echo "Wrong password, please try again ";
    }
}

echo "Password accepted. You are authenticated.\n"; 

$previousnumber = 0;
$currentnumber = 1;
$terms = 10;
echo "Fibonacci sequence up to $terms terms: \n";
$count = 0;

while ($count< $terms){
    echo $previousnumber . " ";
    $next = $previousnumber + $currentnumber;
    $previousnumber = $currentnumber;
    $currentnumber = $next;

    $count ++;
}

echo "\n";


echo "Enter a number: ";
$number = trim(fgets(STDIN));
$multiplier = 1;

echo "Multiplication Table for $number: \n";
while($multiplier<=10){
    $result = $number * $multiplier;
    echo "$number x $multiplier = $result\n";
    
    $multiplier++;
}

$correctnumber = 5;
while ($correctnumber!= $numberr){
    echo "Enter a random number: \n";
    $numberr= trim(fgets(STDIN));
     
if($numberr !== $correctnumber){
    echo "Please try again. \n";
    }   
}
echo "U guessed the right number. \n"; 

$string = "Mirela";
$i = 0;
while(!empty($string[$i])){
    $i ++;
}

echo "Enter a string: ";
$input = trim(fgets(STDIN));
$reversed = "";
$length = strlen($input);

while($length > 0){
    $reversed .= $input[--$length];
}
echo "Reversed string: " .$reversed . "\n"; 

//sum of digits 
echo "Enter a number: ";
$number = trim(fgets(STDIN));

// Initialize variables
$sum = 0;

// Ensure the number is positive
$number = abs($number);

// Process each digit of the number
while ($number > 0) {
    // Get the last digit
    $digit = $number % 10;

    // Add the digit to the sum
    $sum += $digit;

    // Remove the last digit
    $number = (int)($number / 10);
}

// Output the result
echo "The sum of the digits is: " . $sum . "\n";
