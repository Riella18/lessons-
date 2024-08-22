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

function BeadSort($data)
{
	$dataCount = count($data);

	for ($i = 1, $max = $data[0]; $i < $dataCount; ++$i)
		if ($data[$i] > $max)
			$max = $data[$i];

	$beads = array_fill(0, $max * $dataCount, 0);

	for ($i = 0; $i < $dataCount; ++$i)
		for ($j = 0; $j < $data[$i]; ++$j)
			$beads[$i * $max + $j] = 1;

	for ($j = 0; $j < $max; ++$j)
	{
		for ($sum = $i = 0; $i < $dataCount; ++$i)
		{
			$sum += $beads[$i * $max + $j];
			$beads[$i * $max + $j] = 0;
		}

		for ($i = $dataCount - $sum; $i < $dataCount; ++$i)
			$beads[$i * $max + $j] = 1;
	}

	for ($i = 0; $i < $dataCount; ++$i)
	{
		for ($j = 0; $j < $max && $beads[$i * $max + $j]; ++$j) ;
		$data[$i] = $j;
	}
}
$data = array(586, 25, 58964, 8547, 119, 0, 78596);
BeadSort($data);
print_r($data); 

// exercise 11 (merge)

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

function merge_arrays_by_index($x, $y)
{
    // Create an empty temporary array
    $temp = array();
    $temp[] = $x;

    // Check if $y is a scalar value
    if (is_scalar($y))
    {
        // If $y is scalar, add it directly to the temporary array
        $temp[] = $y;
    }
    else
    {
        // If $y is an array, iterate through its key-value pairs and add values to the temporary array
        foreach ($y as $k => $v)
        {
            $temp[] = $v;
        }
    }

    // Return the temporary array
    return $temp;
}
print_r(array_map('merge_arrays_by_index', $array2, $array1));

// exercise num 12
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function change_case($Color) {
    $lowercase = '';
    $uppercase = '';

    foreach ($Color as $key => $val) {
        $lowercase .= strtolower($key) . " => " . $val . "\n";
        $uppercase .= strtoupper($key) . " => " . $val . "\n";
    }

    return array('lowercase' => $lowercase, 'uppercase' => $uppercase);
}

$cases = change_case($Color);
echo "Lowercase keys:\n";
echo $cases['lowercase'];

echo "Uppercase keys:\n";
echo $cases['uppercase'];

// exercise number 13
echo "These numbers are divisible by 4: "; 
echo implode(",", range(200, 250, 4)) . "\n";

// $numbers = range(200, 250, 4); // Generates array: [200, 204, 208, 212, 216, 220, 224, 228, 232, 236, 240, 244, 248]
// $numbersString = implode(",", $numbers); // Joins array elements with commas: "200,204,208,212,216,220,224,228,232,236,240,244,248"
// echo $numbersString . "\n"; // Outputs the string followed by a newline

// exercise 14
$words = array("abcd","abc","de","hjjj","g","wer"); 
$new_words = array_map('strlen', $words);
echo "The shortest array length is " . min($new_words) .".\n".
    " The longest array length is " . max($new_words) . ".\n";

//exercise 15
echo "Random numbers from 11 to 20: ";
$randomNumber = range(11, 20);
//echo "random number from the range 11 to 20: $randomNumber \n"; 
shuffle($randomNumber);
for($x =0; $x <10; $x++){
    
    echo $randomNumber[$x] . " ";
}
echo ".\n"; 

// exercise 16 
$ceu = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

// Use 'max' and 'array_keys' functions to find the maximum key in the associative array
$max_key = max(array_keys($ceu));

// Echo the maximum key
echo $max_key . "\n";

// exercise 17

// echo $_SERVER['SERVER_ADDR'];

function floorDec($number, $precision, $separator){
    $floorNumber = floor($number * pow(10, $precision)) / pow(10, $precision);
    $formattedNumber = number_format($floorNumber, $precision, $separator, '');
    return $formattedNumber; 
}
echo floorDec(1.55, 2, ".") . "\n";
echo floorDec(100.25781, 4, ".") . "\n";
echo floorDec(-2.9636, 3, ".")."\n";

//ex 19 
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));

echo $color["holes"][5] . "\n";
echo $color["color"]["a"] ."\n";

// $color = array(
//     "color" => array("a" => "Red", "b" => "Green", "c" => "White"),
//     "numbers" => array(1, 2, 3, 4, 5, 6),
//     "holes" => array("First", 5 => "Second", "Third")
// );

// // Function to find key by value in an associative array
// function findKeyByValue($array, $valueToFind) {
//     $result = array_search($valueToFind, $array);
//     return $result !== false ? $result : null;
// }

// // Access specific value by key
// $keyToFind = "Red";
// $colorArray = $color["color"];
// $key = findKeyByValue($colorArray, $keyToFind);

// if ($key !== null) {
//     echo "The key for '$keyToFind' is '$key'.\n";
//     echo "The value for '$key' is " . $color["color"][$key] . ".\n";
// } else {
//     echo "Key '$keyToFind' not found.\n";
// }

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
} 

Sum();
echo $b . "\n";
class Solution {

    /**
     * @param Integer[] $nums
     * @return int
     */
    function removeDuplicates(array &$nums): int {
        $count = count($nums);
        $writeIndex = 1;
        
        for ($i = 1; $i < $count; $i++) {
            if ($nums[$i] !== $nums[$i - 1]) {
                $nums[$writeIndex] = $nums[$i];
                $writeIndex++;
            }            
        }
        
        return $writeIndex;
    }
}

$solution = new Solution();

$nums = [1, 1, 2];
$length = $solution->removeDuplicates($nums);

// Display the modified array up to the new length
echo "Modified array: ";
print_r(array_slice($nums, 0, $length));


class Prefix {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $p = "";
        $l = strlen($strs[0]);
        for($i = 0; $i<$l; $i ++){
            $c = $strs[0][$i];
            foreach($strs as $s){
                if($c !== $s[$i]){
                    return $p;
                }
            }
            $p .=$c;
        }
        return $p;
    }
}

$prefix = new Prefix();
$strs = ["flower","flow","flight"];
echo "$strs ";


function arraySortPriority(array &$array, $offset, array $priorities)
{
    uasort($array, function ($a, $b) use ($offset, $priorities) {
        if (!isset($a[$offset])) {
            $a[$offset] = null;
        }
        if (!isset($b[$offset])) {
            $b[$offset] = null;
        }
        if ($a[$offset] == $b[$offset]) {
            return 0;
        }
        $aPriority = isset($priorities[$a[$offset]])
            ? $priorities[$a[$offset]]
            : null;
        $bPriority = isset($priorities[$b[$offset]])
            ? $priorities[$b[$offset]]
            : null;
        return $aPriority > $bPriority ? -1 : 1;
    });
}

$array[0] = 2;
$array[1] = 1;
$array[2] = 3;
$array[3] = 4;
$array[4] = 2;
$array[5] = 1;
$array[6] = 2;

arraySortPriority($array, 'type', $priorities);
// test output
foreach ($array as $item) {
    if (isset($item['type'])) {
        echo "{$item['type']}\r\n";
    } else {
        $values = array_values($item);
        echo reset($values) . PHP_EOL;
    }
}