<!-- <?php
//constants
define("TITLE", "Arrays");
// custom variables 
$my_name = "Mirela";
$my_age = 19;
//moustache arrays

$moustache = array("Handlebar", "Salvador Dali", "Fu Manchu");

?>

<!Doctype html>
<html>
    <head>
        <title>PHP arrays <?php echo TITLE; ?> </title>
    </head>
    <body>
        <div class = "wrapper">
            <h1> Tutorial <?php echo $my_age;?>: <small><?php echo TITLE; ?> </small></h1>
            <hr> 

            <h2> Final example </h2>
            <div class = "sandbox">
                <h2>Mustache Type</h2>
                <ul>
                    <li> <?php echo $moustache[0]; ?></li>
                    <li> <?php echo $moustache[1]; ?></li>
                    <li> <?php echo $moustache[2]; ?></li>
                </ul>
            </div>
        </div>
    </body>
</html> -->
<!-- 
<?php
//Constants 
define("Title", "Associative arrays");
//Custom Variables 
$name = "Mirela";
$lesson_number = 7;
// Moustache associative array 

$handlebar = array(
    "name"            => "Handlebar", 
    "creep_factor"    => "High",
    "avg_growth_days" => 14
);
?>
<!DOCTYOPE html>
<html>
    <head>
        <title><?php echo Title; ?></title>
        <body>
            <div>
                <h2> The <?php echo $handlebar["name"]; ?> Moustache!</h2>
                <p>This Moustache is quite the dirt squirrel! It boasts a creep factor of <strong> 
                    <?php echo $handlebar["creep_factor"]; ?> </strong> and takes <strong> 
                        <?php echo $handlebar["avg_growth_days"]; ?> days </strong> to grow on average<p>
            </div> 
        </body>
    </head>
</html> -->
<!-- 
<?php
// multidimensional arrrays

define("title", "Multidimensional arrays");
//custom variables
$namee = "Riella";
$lesson_numberr = 8;
//moustache multidimensional array
$moustachess = array(

    array(
        "name"          => "Handlebar",
        "creep_factor" => "High",
        "avg_days"      => 14
    ),
    array(
        "name"          => "salvador Dali",
        "creep_factor" => "Extreme",
        "avg_days"      => 14
    ),

    array(
        "name"          => "Handlebar",
        "creep_factor" => "High",
        "avg_days"      => 14
    )
    ); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo title; ?></title>
        <body>
            <div>
                <h2>The <?php echo $moustachess[0]["name"]; ?> Moustache!</h2>
                <p>This Moustache is quite the dirt squirrel! It boasts a creep factor of <strong> <?php echo $moustachess[0]["creep_factor"]; ?> </strong> 
                and takes <strong> <?php echo $moustachess[0]["avg_days"]; ?> days</strong> to grow on average. </p>

               <h2>The <?php echo $moustachess[1]["name"]; ?> Moustache!</h2>
                <p>This Moustache is quite the dirt squirrel! It boasts a creep factor of <strong> <?php echo $moustachess[1]["creep_factor"]; ?> </strong> 
                and takes <strong> <?php echo $moustachess[1]["avg_days"]; ?> days</strong> to grow on average. </p>

                <h2>The <?php echo $moustachess[2]["name"]; ?> Moustache!</h2>
                <p>This Moustache is quite the dirt squirrel! It boasts a creep factor of <strong> <?php echo $moustachess[2]["creep_factor"]; ?> </strong> 
                and takes <strong> <?php echo $moustachess[2]["avg_days"]; ?> days</strong> to grow on average. </p>
            
                <small>&copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small>
            </div>
        </body>
    </head>
</html> -->

<?php
define("titlee", "Arrays");
$namee = "Mirelaa";

$arrays = array(
    array(
        "name"      => "Carter",
        "age"       => "adult",
        "sport"     => "Handlebar", 
        "colour"    => "black",
        "country"   => "Canada"
    ),

    array(
        'name'      => "Rodrigo",
        "age"       => "teenager",
        "country"   => "Uruguay"
    ),
    array(
        "name"      => "Giovanni",
        "age"       => "child",
        "project"   => "Salvador Dali",
        "colour"    => "blonde",
        "country"   => "Italy"
    )
    );

?>

<!DOCTYPE html>
<html>
<head>
    <div>
    <h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
    <h2>Final Exam</h2>
    <small> Make sure to view the source code in your editor</small>

    <h3><?php echo $arrays[0]["name"]; ?> from <?php echo $arrays[0]["country"]; ?> </h3>
    <p><strong><?php echo $arrays[0]["name"]; ?></strong> is quite the <strong><?php echo $arrays[0]["age"]; ?>! </strong> He sports a solid <strong><?php echo $arrays[0]["sport"] ?></strong> 
    Moustache that is <strong><?php echo $arrays[0]["colour"]; ?></strong> in colour. </p>

    <h3><?php echo $arrays[1]["name"] ?> from <?php echo $arrays[1]["country"] ?></h3>
    <p><strong><?php echo $arrays[1]["name"] ?></strong> is a rather dapper <strong><?php echo $arrays[1]["age"] ?>! </strong> He proudly wears a that is couloured a gentle. </p>

    <h3><?php echo $arrays[2]["name"] ?> from <?php echo $arrays[2]["country"] ?> </h3>
    <p><strong><?php echo $arrays[2]["name"] ?></strong> might seem too young for a 'stache because he is a <strong><?php echo $arrays[2]["age"] ?>.</strong> 
    But he proudly displays his <strong><?php echo $arrays[2]["project"] ?></strong> school! Although, it's a lil hard to see cos it's light <strong><?php echo $arrays[2]["colour"] ?>.</strong></p>
    
    <a href="practice.php" class="button">Check out your example</a>
    <br>
    <small> <?php echo date('Y'); ?> <?php echo $name; ?></small>
</div>
</head>
<body>
    
</body>
</html>