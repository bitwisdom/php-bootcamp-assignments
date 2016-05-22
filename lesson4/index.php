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
            <?php $quotes = $shipping_service_manager->getQuotes($item->getWeight()); ?>
            <?php foreach ($quotes as $quote): ?>
                <div><?php print $quote->getName() . ': $' . $quote->getPrice(); ?></div>
            <?php endforeach; ?>
        <?php endforeach; ?>
       
    </body>
</html>
