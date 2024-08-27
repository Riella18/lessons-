<!-- <?php
$yearsonEarth = 25.32;
$favStringnum = "1";
$birthCountry = "Albania"; 

echo "Identical <br>"; 
if($yearsonEarth == 25.32){
    echo "Your age is equal to $yearsonEarth <br> "; 
}

if($favStringnum === 1){
    echo "your fav number is an integer <br>";
}elseif($favStringnum === "1"){
    echo "<p>ur fav num is a string called 1 <br> ";
}else {
    echo "you must have a diff fav number than 1 the integer, or string <br>"; 
}

echo "not equal" ." <br>";
if($birthCountry != "Mexico"){
    echo "Excuse me, you must be from around here. <br>";
}else {
    echo "You are from Albania <br>";
}

echo "not "; ?>-->

<!-- 
<?php 
define("title", "Logical operators");
$my_namee = "Mirela";
$lessonNum = 15 ;

$username = "Riella";
$password = "qwerty";

$arttotal = 19.99;
$couponCode = "DiscountPls";

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP <?php echo title; ?></title>
</head>
<body>
    <div>
        <h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo title; ?> </small></h1>
        <h3> AND <code>and</code></h3>
        <?php 
        if($username == "Riella" and $password == "qwerty"){
            echo "<p>Login info is correct!</p>"; 
        }
        ?>
        <h3> Or <code>or</code></h3>
        <?php
        if($carttotal>15 or $couponCode == "DiscountPls"){
            echo "You get a discount!\n";
        } else{
            echo "You don't get a discount!\n"; 
        }
        ?>
        <h3> Not <code>!</code></h3>
        <?php 
        $owndog = true;
        if(!$owndog){
            echo "You don't own a dog.";
        }else{
            echo "You own a dog.";
        }
        ?>

        <h3> AND <code>&&</code></h3>
        <?php
        if($username == "Riella" && $password = "qwerty"){
            echo "Login info is correct!";
        }else {
            echo "Wrong login info. ";
        }
        ?>
        <h3> Or <code>||</code></h3>
        <?php
        if($carttotal>15 || $couponCode == "DiscountPls"){
            echo "You get a discount!\n";
        } else{
            echo "You don't get a discount!\n"; 
        }
        ?>  
    </div>

    
</body>
</html> -->

<!-- <?php
//there are only two string operators 
//concatenation operator . combines the right argument with the left one
// concatenating assignment operator .= appends the value in the right with the value in the left  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3> Concatenation operator <code>.</code></h3>
        <?php
            $a = "Hola";
            $b = " Mi amor";
            $c = $a . $b;
            echo $c; 
        ?>
        <h3> Concatenating assignment operator <code>.=</code></h3>
        <?php
        $a = "hola ";
        echo $a .= "Mi amigos";
        ?>
    </div>
</body>
</html> -->

