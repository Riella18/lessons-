<!-- 

// for($x = 1; $x<= 10; $x++){
//     if($x<10){
//         echo "$x-";
//     }else{
//         echo "$x" . "\n";
//     }
// }

// //sum of integers from 0 to 30
// $sum = 0;
// for ($x = 0; $x < 30; $x++){
//     $sum += $x;
// }
// echo "The sum of the numbers from 0 to 30 is $sum " ."\n";


// //nested loop
// for ($x=1; $x<=5; $x++) //controls the number of rows in the triangle
// {
//     for ($y = 1; $y<=$x; $y++){ //controls the number of asteriks printed in each row
//         echo "*";

//         if($y < $x){
//             echo " ";
//         }
//     }
// echo "\n";
// }

// //printing the down
// $n = 5;
// for($i=1; $i<=$n; $i++){
//     for ($j=1; $j<=$i; $j++){
//         echo '* '; 
//     }
//     echo "\n";
// }
// for ($i=$n; $i>=1; $i--){
//     for($j =1; $j<=$i; $j++){
//         echo '* ';
//     }
//     echo "\n";
// }

// // write the factorial

// $n = 4;
// $factorial = 1;

// for ($i=1; $i <= $n -1; $i++){
//     $factorial *= ($i +1);
// }
// echo "The factorial of $n = $factorial \n";

// $number = 10;
// for($a=0; $a < $number; $a ++){
//     for($i = 0; $i<$number; $i++){
//         echo $a.$i ." , "; 
//     }
// }
// printf("\n");

// $word = "W3resource";
// $search_char = "r";
// $count = "0";
// for ($x = "0"; $x < strlen($word); $x++){
//     if(substr($word, $x, 1)== $search_char){
//         $count = $count + 1;for($x = 1; $x<= 10; $x++){
//     if($x<10){
//         echo "$x-";
//     }else{
//         echo "$x" . "\n";
//     }
// }

// //sum of integers from 0 to 30
// $sum = 0;
// for ($x = 0; $x < 30; $x++){
//     $sum += $x;
// }
// echo "The sum of the numbers from 0 to 30 is $sum " ."\n";

\\nested loop
 for ($x=1; $x<=5; $x++) //controls the number of rows in the triangle
// {
//     for ($y = 1; $y<=$x; $y++){ //controls the number of asteriks printed in each row
//         echo "*";

//         if($y < $x){
//             echo " ";
//         }
//     }
// echo "\n";
// }

// //printing the down
// $n = 5;
// for($i=1; $i<=$n; $i++){
//     for ($j=1; $j<=$i; $j++){
//         echo '* '; 
//     }
//     echo "\n";
// }
// for ($i=$n; $i>=1; $i--){
//     for($j =1; $j<=$i; $j++){
//         echo '* ';
//     }
//     echo "\n";
// }

// // write the factorial

// $n = 4;
// $factorial = 1;

// for ($i=1; $i <= $n -1; $i++){
//     $factorial *= ($i +1);
// }
// echo "The factorial of $n = $factorial \n";

// $number = 10;
// for($a=0; $a < $number; $a ++){
//     for($i = 0; $i<$number; $i++){
//         echo $a.$i ." , "; 
//     }
// }
// printf("\n");

// $word = "W3resource";
// $search_char = "r";
// $count = "0";
// for ($x = "0"; $x < strlen($word); $x++){
//     if(substr($word, $x, 1)== $search_char){
//         $count = $count + 1;
//     }
// }
// echo "There are ". $count ." $search_char in $word. ". "\n";
//     }
// }
// echo "There are ". $count ." $search_char in $word. ". "\n";
// align="left" border= "1" 

<!-- <!DOCTYPE html>
<html>
<body>
<table cellpadding = "3" cellspacing = "0"> -->


<!-- </head>
<body>
<h1>php & mysql connection</h1>
<hr>
<table border = '2'>
<tr>
<th>id</th>
<th>name</th>
</tr> -->
    
<!-- 
// $mask = "|%5.5s |%-30.30s | x |\n";
// printf($mask, 'Num', 'Title');
// for ($i = 0; $i<=6; $i++){

//     // print "<tr>"; //start a new line
    
//     for ($j= 1; $j<= 5; $j++){
//         printf($mask, '1', $i * $j);
//         // echo "<td>  " . $i * $j . "</td>";
//         printf($mask, '2', $i + $j);
    
//     }
// } -->
<?php
$n =5;
echo "n = " . $n . "\n";
$count = 1;
for($i = $n; $i> 0; $i-- ){
    for ($j =$i; $j<$n +1; $j++){
        printf("%3s", $count);
        $count ++;
    }
    echo "\n";
}


for ($x=1; $x<=5; $x++) //controls the number of rows in the triangle
{
    for ($y = 1; $y<=$x; $y++){ //controls the number of asteriks printed in each row
         echo "*";

         if($y < $x){
             echo " ";
         }
     }
 echo "\n";
}


for($n= 1; $n < 50; $n++){
    if($n %3==0 && $n %5 ==0){
        echo "$n Fizzbuzz \n";
    }elseif ($n %5 == 0){
        echo " $n Buzz \n";
    }elseif ($n % 3== 0){
        echo "$n Fizz \n";
    }else{
        echo $n . "\n";
    }
}

for ($row = 0; $row <=7; $row++){
    for ($column = 0; $column<=7; $column++){
        if ((($column ==1 or $column ==5) and $row != 0) or (($row == 0 or $row ==3) and ($column>1 and $column < 5)))
        echo "*";
        else 
        echo " ";
    }
    echo " \n";
}

for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}


for ($row = 0; $row < 7; $row ++){
    for ($column = 0; $column <= 7; $column ++){
        if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))

        echo "*";

        else
        echo " " ;
    }
    echo " \n ";
}


// foreach loop
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value);


$dinner = array("Meat", "Potatoes", "Beans", "Rice");
sort($dinner);
foreach($dinner as $ingredient){
    echo "I love $ingredient \n";
}

echo "Current PHP version: " . phpversion();
echo phpversion('tidy'). "\n";


for ($i = 1; $i<7; $i ++){
    for ($j= 1; $j <7; $j ++){

    }
}

$a =10;
$b = 20;

$result = ($a > $b) ? $a : $b;
echo "TEST1 : Value of result is $result \n";
$result = ($a < $b) ? $a : $b;
echo "TEST2 : Value of result is $result \n"; 