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

// Display the original array
echo "Original Array: ";
foreach ($original_array as $o) {
    echo "$o "; 
}
echo "\n";
$inserted = '$';

// Use array_splice() to insert the value '$' at index 3 in the original array
array_splice($original_array, 3, 0, $inserted);

// Output a message indicating the array after the insertion
echo "After inserting '$' the array is: \n";

// Iterate through the modified array and echo its elements
foreach ($original_array as $o) {
    echo "$o ";
}
echo "\n";

// exericse number 8
function display($array, $sortfunc, $explanation){
    $sortfunc($array);
    echo $explanation . "\n"; 
    foreach($array as $key => $values){
        echo "Key = " .$key . ", Age = $values" . " \n";
    }
}
$infos = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
display($infos, 'sort', "asceending order sort by value \n");
display($infos, "ksort", "Ascending order sort by key \n"); 
display($infos, "arsort", "Descending order sorting by value \n");
display($infos, "krsort", "Descending order sorting by value \n"); 

// exercise num 9 

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp); // Split the string into an array using commas as the delimiter
$tot_temp = 0;// Initialize variables for total temperature and the length of the temperature array
$temp_array_length = count($temp_array);

// Iterate through the temperature array, calculate the total temperature
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}

$avg_high_temp = $tot_temp / $temp_array_length; // Calculate the average high temperature
echo "Average Temperature is : \n" . $avg_high_temp . "\n"; // Display the average temperature
sort($temp_array); // Sort the temperature array in ascending order

echo " List of five lowest temperatures : \n";
for ($i = 0; $i < 5; $i++)
{ 
    echo $temp_array[$i] . ", ";
}
echo "\n List of five highest temperatures : \n";
for ($i = ($temp_array_length - 5); $i < $temp_array_length; $i++)
{
    echo $temp_array[$i] . ", ";
}
echo "\n";

// exercise num 10
