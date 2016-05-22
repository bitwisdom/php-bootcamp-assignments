<?php

$name = "Bob";
$starting_weight = 200;
$target_weight = 190;

$per_week = ($starting_weight - $target_weight) / 8;
$weekly_targets = [];

$current_weight = $starting_weight;
for ($i = 0; $i < 8; $i++) {
    $current_weight -= $per_week;
    $weekly_targets[] = $current_weight;
}

?>
<html>
    <head>
        <title>Weight Loss Plan for <?php print $name; ?></title>
    </head>
    <body>
        <h1>Weight Loss Plan for <?php print $name; ?></h1>
        <p>Starting Weight: <?php print $starting_weight; ?> pounds<br />
            Target Weight: <?php print $target_weight; ?> pounds</p>
        <p><?php foreach ($weekly_targets as $i => $weekly_target): ?>
             Week <?php print $i + 1; ?> Target: <?php print $weekly_target; ?> pounds<br /> 
           <?php endforeach; ?>
        </p>
    </body>
</html>