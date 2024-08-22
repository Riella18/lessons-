<?php
//Define a constant 
define("Title", "Var and Constants");
//Your var
$my_name = "Mirela";
$fav_colour = "Black";
$birth_year = 2005;

date_default_timezone_set('Europe/Tirane');
$today = date('F j, Y');
$this_year = date('Y');

$my_age = ($this_year - $birth_year);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo Title; ?></title>
		<!-- <link href="../assets/styles.css" rel="stylesheet"> -->
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo Title; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>
			
			<div class="sandbox">
				<h3>Today's Date:</h3>
				<p><?php echo $today; ?></p>
				
				<h3>My Name:</h3>
				<p><?php echo $my_name; ?></p>
				
				<h3>My Favourite Colour:</h3>
				<p><?php echo $fav_colour; ?></p>
				
				<h3>My Age:</h3>
				<p><?php echo $my_age; ?></p>
			</div><!-- end sandbox -->
			
			<!-- <a href="practice.php" class="button">Check out your example</a> -->
			
			
	</body>
</html>