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

$temperature = (float)readline("Enter the temperature in C: ");

if ($temperature<=0 ){
    echo "It's freezing! Wear warm clothes. \n";
}elseif ($temperature<=0 && $temperature>=10 ){
    echo "It's cold. Make sure to wear a jacket.\n";
}elseif ($temperature<=11 && $temperature>=20){
    echo "It's cool. A sweater should be enough\n";
}else{
    echo "It's warm. wear light clothing\n "; 
}

$age = (float)readline("What's your age: ");
if ($age<13){
    echo "You are a child \n";
} elseif($age<=13 && $age <20){
    echo "You are a teenager \n";
}elseif ($age<20 && $age <60){
    echo "You are an adult ";
}else{
    echo "You are a Senior ";
}
