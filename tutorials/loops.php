<?php
$starting_number = 10;
//while 
 echo "values from 10 to 20: \n"; 
while($starting_number<= 20){
    echo  $starting_number ;

    if ($starting_number < 20) {
        echo ", ";
    }
    
    $starting_number++;
}

echo "<br>"; 
for ($a = 0; $a<= 20; $a++){
 
    echo "Number: $a <br>";
}

$moustaches = array("Handlebar", "Salvador Dali", "FU Manchu");
foreach($moustaches as $moustache){
    echo "I love the $moustache <br>";
}

// do while loop
$i = 1;
do{
    echo "Number: $i <br>";
    $i++;
}
while($i <= 10);