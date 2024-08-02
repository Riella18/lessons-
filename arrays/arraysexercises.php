<?php
// exercise num 1
$color = array("white", "green", "red", "blue", "black");
echo "The memory of that scene for me is like a frame of film forever frozen at the moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. -Richard M.Nixon \n";

//exercise num 2
$colors = array('white', 'green', 'red');
foreach ($colors as $c) {
    echo "$c, ";
}

echo "\n";
sort($colors);
// Iterate through each color in the sorted array and echo them as list items
foreach ($colors as $y) {
    echo "$y \n";
}

// exercise num 3
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

asort($ceu);
foreach($ceu as $c => $c_value){
    echo "The capital of $c is $c_value. \n"; 
}

//exercise num 4
$x = array(1, 2, 3, 4, 5);
var_dump($x);

unset($x[3]);
$x = array_values($x);
echo '';
var_dump($x);

// exercise num 5 
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo "The first color is: ". reset($color) . "\n";  //output the value of the first element in the array using reset()

// exercise num 6
function w3rfunction($value, $key) {
    echo "$key : $value" . "\n";
}
$a = '{"Title": "The Cuckoos Calling",
      "Author": "Robert Galbraith",
      "Detail": { 
                  "Publisher": "Little Brown"
                 }
     }';

// Decode the JSON string into a PHP associative array
$j1 = json_decode($a, true);
// Use array_walk_recursive to apply the w3rfunction to each element in the nested array
array_walk_recursive($j1, "w3rfunction");

//exercise num 7
$original_array = array(1, 2, 3, 4, 5);
echo "Original Array : $original_array"." \n ";
foreach($original_array as $o){
    echo $o ; 
}
// Define a string '$' to be inserted into the array
$inserted = '$';

// Use array_splice() to insert the value '$' at index 3 in the original array
array_splice($original_array, 3, 0, $inserted);

// Output a message indicating the array after the insertion
echo " \n After inserting '$' the array is : " . "\n";

// Iterate through the modified array and echo its elements
foreach ($original_array as $o) {
    echo "$o ";
}

// Output a newline character for better formatting
echo "\n";