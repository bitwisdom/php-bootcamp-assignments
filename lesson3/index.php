<?php

include_once __DIR__ . '/bootstrap.php';

?>
<html>
    <title>BitWisdom Shop</title>
    <body>
        <h1>BitWisdom Shop</h1>
        <?php foreach ($items as $item): ?>
            <h2><?php print $item->getName(); ?></h2>
            <?php print $item->getDescription(); ?>
            <strong>Shipping</strong>
            <?php foreach ($shipping_services as $service): ?>
                <div><?php print $service->getName() . ': $' . $service->getShippingCost($item->getWeight()); ?></div>
            <?php endforeach; ?>
        <?php endforeach; ?>
       
    </body>
</html>
