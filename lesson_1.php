<?php

$name = "Bob";
$starting_weight = 200;
$target_weight = 190;

$per_week = ($starting_weight - $target_weight) / 8;
$week_1 = $starting_weight - $per_week;
$week_2 = $week_1 - $per_week;
$week_3 = $week_2 - $per_week;
$week_4 = $week_3 - $per_week;
$week_5 = $week_4 - $per_week;
$week_6 = $week_5 - $per_week;
$week_7 = $week_6 - $per_week;
$week_8 = $target_weight;

?>
<html>
    <head>
        <title>Weight Loss Plan for <?php print $name; ?></title>
    </head>
    <body>
        <h1>Weight Loss Plan for <?php print $name; ?></h1>
        <p>Starting Weight: <?php print $starting_weight; ?> pounds<br />
            Target Weight: <?php print $target_weight; ?> pounds</p>
        <p>Week 1 Target: <?php print $week_1; ?> pounds<br />
        Week 2 Target: <?php print $week_2; ?> pounds<br />
        Week 3 Target: <?php print $week_3; ?> pounds<br />
        Week 4 Target: <?php print $week_4; ?> pounds<br />
        Week 5 Target: <?php print $week_5; ?> pounds<br />
        Week 6 Target: <?php print $week_6; ?> pounds<br />
        Week 7 Target: <?php print $week_7; ?> pounds<br />
        Week 8 Target: <?php print $week_8; ?> pounds<br />
        </p>
    </body>
</html>