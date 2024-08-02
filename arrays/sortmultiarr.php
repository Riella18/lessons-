<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars); // ascending alphabetical order 
echo "Cars sorted alphabetically: \n"; 
$clength = count($cars);
for ($x=0; $x< $clength; $x++){
    echo $cars[$x] . "\n";

}

echo "Sorted numbers: \n";
$numbers = array(500, 4, 6, 2, 22, 11, 10, 100);
sort($numbers); //ascending numberical order 
foreach($numbers as $number){
    echo $number . "\n"; 
}

echo "Descending alphabetical order: \n";
rsort($cars); // Descending alphabetical order
$clength = count($cars); // Recalculate length after sorting
for ($x = 0; $x < $clength; $x++) {
    echo $cars[$x] . "\n";
}

echo "Descending numbers in numerical order: \n";
rsort($numbers);
foreach($numbers as $number){
    echo $number ."\n"; 
}

echo "The ascending order according to the value: \n";
$age = array("Mirela" => 19, "Claudia" => 18, "Paloma" => 20 );
asort($age);
foreach($age as $x=> $x_value){
    echo "Key = " .$x . ", Value = " . $x_value .".\n";
}

echo "According to the key: \n";
ksort($age);
foreach($age as $x=> $x_value){
echo "Key = " .$x . ", Value = " . $x_value .".\n";
}

// Instead of ctreating and rewriting all this create a function

function sortanddisplay($array, $sortfunction, $label){
    $sortfunction($array);
    echo $label . "\n";
    foreach($array as $key => $value){
        echo "Key = " . $key .", Age(value) =  $value". ",\n";
    }
}

$age = array("Mirelaa" => 19, "Claudiaa" => 18, "Palomaa" => 20 );
sortanddisplay($age, 'asort', "The ascending order of the value; \n");
sortanddisplay($age, 'ksort', "According to the key: \n");
sortanddisplay($age, 'arsort', "Descending order according to the value: \n");
sortanddisplay($age, "krsort", "Descending order according to the key: \n");

  echo "\n";
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".\n";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".\n";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".\n";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".\n";

  $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  
  for ($row = 0; $row < 4; $row++) {
    echo "Row number $row \n";
    for($col = 0; $col <3; $col++){
        echo $cars[$row][$col] .".\n";
    }
  }  

  