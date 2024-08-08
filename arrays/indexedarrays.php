<?php 

$cars = array("Lamborghini", "Mclaren", "Porche");
foreach ($cars as $x){
    echo "$x \n";
}
array_push($cars, "Audi");
echo "Audi pushed: \n";  //displays information about a variable in a way that's readable by humans.
print_r($cars);


$size=array("Big","Medium","Short");  

echo json_encode($size,true); die();

$t = (object) [
    'pipo'=>'OLE'
];

print_r($t->pipo);

$size = (object) $size;

print_r($size->{1});

die();

echo "Size: $size[0], $size[1] and $size[2] ".  "\n";  



