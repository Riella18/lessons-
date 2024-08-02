<?php
$water = array("SantAnna", "Lajthiza", "Qafshtama");
$water[2] = "stella";
//echo $water ."\n";
print_r($water); // change from qafshtama to stella 

//update from an associate array

$cars = array("brand" => "british", "model" => "McLaren", "year" => 2009);
$cars["year"] = 2010;
$cars["color"] = "Red"; 
//print_r($cars) ."\n";
var_dump($cars);

$car = array("Volvo", "BMW", "Toyota");
foreach ($car as &$x) {
  $x = "Ford";
  
}
unset($x); //destroys the specified variables
var_dump($car);

$car[] = "McLaren"; //add array item
print_r($car);

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "orange", "Kiwi", "Lemon");
//echo "$fruits \n";
print_r($fruits) ."\n";

$carss = array("brand" => "Ford", "model" => "Mustang");
$carss += ["color"=> "red", "year" => 1964];
print_r($carss);

$cars = array("Volvo", "BMW", "Toyota", "McLaren");
array_splice($cars, 2, 2);
var_dump($cars);

$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1);  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

// note the differences in the array keys
print_r(array_slice($input, 2, -1));
print_r(array_slice($input, 2, -1, true));

$letters = array("a", "b", "c", "d", "e", "f", "g", "h");

// Slice starting from index 2
$out = array_slice($letters, 0, -4);
echo "This array starting from index 2 is: " .implode(", ", $out) . ". \n";

// Slice from the start up to the second-to-last element
$out = array_slice($letters, 1, -2);
echo "this array from the start up to the second-to-last element is: " .implode(", ", $out) . ". \n";

$array = ['lastname', 'email', 'phone'];
var_dump(implode(", ", $array)); // string(20) "lastname,email,phone"

// Empty string when using an empty array:
var_dump(implode('hello', [])); // string(0) ""

// The separator is optional:
var_dump(implode(['a', 'b', 'c']));

$cars = array("Munstag", "McLaren", "Ferrari");
array_splice($cars, 1, 1);
var_dump($cars);
echo "deleting with unset: " . "\n";
unset($cars[0]); 
//echo "deleting with unset: " .unset($cars[0]) . ;
$cars = array_values($cars);
var_dump($cars);

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);


$cars = array("Munstag", "McLaren", "Ferrari");
array_shift($cars);
echo "Removing the first item of an array: \n" ;
var_dump($cars) ."\n";
// var_dump($cars); 

