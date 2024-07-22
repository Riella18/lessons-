<?php
$x =99; 
if ($x% 2==0){
    if ($x%3 ==0)
    echo "$x is divisible by 2 and 3 \n";

    else 
    echo "$x is divisible by 2 but not divisiblw by 3 \n";
}

elseif ($x%3 ==0)

    echo "$x is divisible by 3 but not divisible by 2 \n";

else 
    echo "$x is not divisible by 3 and not divisible by 2 \n";

$a = 0;

if ($a> 10) {
    echo "Above 10 \n";
    if ($a > 20) {
        echo "and also above 20 \n";
    }else {
        echo "but not above 20 \n";
    }
}
