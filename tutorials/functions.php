<?php
$dinner = array("Meat", "Potatoes", "Beans", "Rice");
sort($dinner);
foreach($dinner as $ingredient){
    echo "$ingredient <br>"; 
}

echo "Sorted in reverse: <br>"; 
rsort($dinner);
foreach($dinner as $ingredient){
    echo "$ingredient <br>";
}

$meat_index = array_search("Meat", $dinner);

// Convert "Meat" to lowercase
if ($meat_index !== false) {
    $lowercase_meat = strtolower($dinner[$meat_index]);
    echo "Lowercase 'Meat': $lowercase_meat <br>";
} else {
    echo "'Meat' not found in the array.<br>";
}

//sha1 encrypts the password into 40 characters 

$password = "Mypasswird";
echo "Before: $password <br>"; 

$password = sha1($password);
echo "After: $password ";

echo "<br>";
function hangTen(){
    echo "Surf's up! Grab your board!";
}

$surfisup = false;
if($surfisup){
    hangTen();
} else{
    echo "Bummer brah! <br> "; 
}


function multiply($val1, $val2){
    $product = $val1 * $val2;
    echo "the product of the 2 numbers is: $product";
}
multiply(14, 27);