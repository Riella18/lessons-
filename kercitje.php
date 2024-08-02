<?php
$cracks_during_the_day = array(7); 

$total_cracks = 0;
for ($i = 0; $i < count($cracks_during_the_day); $i++) {
    $total_cracks += $cracks_during_the_day[$i]; 
}
echo "Total cracks completed in 8 hours: $total_cracks\n";
?>
