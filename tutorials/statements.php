<!-- <?php
$fav_fruit = "apple";
if($fav_fruit == "pineapple"){
    echo "YAY Pineapple is the best";
}elseif ($fav_fruit == "apple"){
    echo "id prefer sth else ";
}else {
    echo "so, you like oranges... ";
} ?> -->

<?php  
define("TITLE", "if else statements");
$my_name = "Mirela";
$earth_years = 19;
$species = "human"; 
$language = "German"; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP <?php echo TITLE; ?></title>
</head>
<body>
    <div> 
    <h1>Get your hands dirty: <small><?php echo TITLE; ?></small>
    <h2> Final Example </h2>
    <small>Make sure to view the source code in your editor!</small>
    <br>
    <br>
    <?php 
    if($species == "human"){
        echo "Welcome, Human! Please leave the black rhino alone. \n";
    }elseif($species == "Rhino alone"){
        echo "Pls leave the humans alone.\n";
    }else{
        echo "You are an unkown specie, please don't make any mess on earth. \n";
    }
?>

<h2>Another example: </h2>
<?php
if($earth_years== 20) {
    echo "Congrats, u've been in earth for 20 yrs";
}elseif($earth_years < 20){
    echo "You've been in earth for less than 20 years";
}else{
    echo "You've been in earch more than 20 yrs"; 
}
?>
<h2>A combination: </h2>
<?php
if($language == "German"){
    echo "I know german language\n";
}elseif($language == "Italian"){
    echo "I know italian\n";
}else{
    echo "I dont know any foreign language\n";
}

?>
</div>
</body>
</html>