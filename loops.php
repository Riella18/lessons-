<?php

$arr = [1,2, 3, 4];

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
if ($x = "Mirela") {
    echo "U find my name" . "\n";
} else {
    echo "Try another name";
}

$y = "linux";
if ($y = "linux") {
    echo "Correct" . "\n";
} else{
    echo "Wrong";
}
