<?php

include_once __DIR__ . '/vendor/autoload.php';

use Bitwisdom\Shop\Book;
use Bitwisdom\Shop\Shirt;
use Bitwisdom\Shop\SPUShippingService;
use Bitwisdom\Shop\ExFedShippingService;

$items = [];
$shipping_services = [];

$items[] = new Book("A Brief History of Time", 11.11, 0.712, 212, "Steven Hawking");
$items[] = new Shirt("Spinal Tap T-Shirt", 16.06, 0.5, 'X-Large');
$items[] = new Book("Goodnight Moon", 10.58, 0.65, 32, "Margaret Wise Brown");
$items[] = new Book("The Lord of the Rings", 29.07, 4.6, 1178, "J.R.R Tolkien");
$items[] = new Shirt('Oxford Dress Shirt', 18.47, 0.837, 'Medium');

$shipping_services[] = new SPUShippingService();
$shipping_services[] = new ExFedShippingService();