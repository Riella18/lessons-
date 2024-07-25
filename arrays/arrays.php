<?php
$calendar = cal_days_in_month(CAL_GREGORIAN, 5, 2060 );
echo $calendar . "\n";

echo "Current direcotry: " .getcwd() ."\n";

$classesDir = "/home/mirela/Documents/personal-projects/lessons-/classes";
if (chdir($classesDir)) {
    echo "Changed directory: " . getcwd() . "\n";

    file_put_contents("example.txt", "This file was created in the classes directory. \n");
 }


echo getcwd();
$Dir = "/home/mirela/Documents/personal-projects/lessons-/arrays";
 if (chdir($Dir)){
    echo "Directory changed: " . getcwd() . "\n";

    file_put_contents("exceptions.php", "Created file in arrays directory. ");
 } else{
    echo "File does not exist";
 }

 $dir = "/classes/";
 if (is_dir($dir)) {
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            echo "filename:" . $file . "/n";
        }
        closedir($dh);
    }
 }

 