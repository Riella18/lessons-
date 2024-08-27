<?php 
// echo $_SERVER["PHP_SELF"] . "\n";

// if (php_sapi_name() !== 'cli') {
//     echo $_SERVER["REMOTE_ADDR"];
// } else {
//     echo "REMOTE_ADDR is not available in CLI mode. \n";
// }

// //echo $_SERVER['GATEWAY_INTERFACE'] ."\n";
// //echo $_SERVER["REQUEST_METHOD"]; 

// //echo $_GET["name"]; 
// print_r($_SERVER['argv']); //contains the arguments passed to the php script, print_r converts an array to a string 
 
// echo "Number of arguments: " . $argc . "\n";
// echo "Command-line arguments:\n";
// var_dump($_SERVER['argv']);

// if ($argc < 2) {
//     echo "Usage: php script.php <name>\n";
//     exit(1);
// }

// $name = $_SERVER['argv'][1];
// echo "Hello, $name!\n";


// switch ($a) {     //we use the switch when u compare only a value intead in if statements u can also add || && to compare multiple variables 
//     case 1:
//         echo "the fisrt case is correct!";
//         break;
//     case 3:
//         echo "The second case is corect!";
//         break;
//     default:
//         echo "NOne of the conditoin we true"; 
// }

// $bool = true;
// $a = 1;
// $b = 4;

// $result = match($a) {
//     1, 3, 4 => "Variable a is equal to one! \n ",
//     2 => "equal to 2!\n",
//     default => "None of the conditions are true \n", 
// };

// echo $result;

// setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day
// if (isset($_COOKIE["user"])) {
//     echo "Welcome back, " . $_COOKIE["user"];
// }

// Simulate GET parameters

$_GET['name'] = 'Mirela';
$_GET['age'] = '25';

// Accessing GET parameters
$name = $_GET['name'];
$age = $_GET['age'];

echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";