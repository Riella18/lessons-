<?php 

$cars = array("Mustang", "Mclaren", "Porche");
foreach ($cars as $x){
    echo "$x \n";
}
array_push($cars, "Audi");
echo "Audi pushed: \n";  //displays information about a variable in a way that's readable by humans.
print_r($cars);


$size=array("Big","Medium","Short");  
echo "Size: $size[0], $size[1] and $size[2] \n";  

$size = array("Big", "Medium", "Short");
foreach($size as $s){
    echo "Size is: $s \n";
}

$fruits = array("apple", "banana", "orange", "grape");

for ($i = 1; $i < count($fruits); $i++) {
  echo $fruits[$i] . "\n";
}

// traverse an indexed array
echo "travere an index array: \n";
$fruits = array("apple", "banana", "orange", "grape");
for ($i =0; $i<count($fruits); $i++){
    echo $fruits[$i] ."\n";
}

// Associative arrays 

$car = array("brand" => "British luxury automotive manufacturer", "model" => "McLaren", "year" =>2009);
$car["year"] = 2010;
var_dump($car);
echo "Model: " .$car["model"] . "\n";

//loop throw an associative array
echo "Looping throw the associative array: \n"; 
foreach($car as $x => $y){
    echo "$x: $y \n";
}

$water = array("SantAnna", "Lajthiza", "Qafshtama");
$water[2] = "stella";
//echo $water ."\n";
print_r($water);