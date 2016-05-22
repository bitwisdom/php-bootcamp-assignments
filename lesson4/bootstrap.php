<?php

include_once __DIR__ . '/vendor/autoload.php';

use Bitwisdom\Shop\ShippingServiceManager;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$yaml_parser = new Symfony\Component\Yaml\Parser();
$config = $yaml_parser->parse(file_get_contents('config/config.yml'));

$paths = [__DIR__ . "/src"];

// database configuration parameters
$dbParams = array(
    'driver'   => $config['db']['driver'],
    'user'     => $config['db']['username'],
    'password' => $config['db']['password'],
    'dbname'   => $config['db']['name'],
);

$entityManagerConfig = Setup::createAnnotationMetadataConfiguration($paths);
$entityManager = EntityManager::create($dbParams, $entityManagerConfig);

$item_repo = $entityManager->getRepository('\Bitwisdom\Shop\Item');
$items = $item_repo->findAll();

$shipping_service_manager = new ShippingServiceManager();
if (!empty($config['shipping_services'])) {
    foreach ($config['shipping_services'] as $service_class) {
        $shipping_service_manager->addService(new $service_class());
    }
}
