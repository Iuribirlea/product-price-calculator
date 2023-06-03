<?php

namespace App;

use App\Service\CartCalculator;
use App\Service\Pan;
use App\Service\Phone;
use App\Service\TV;

require 'vendor/autoload.php';

// Create an instance of the CartCalculator
$calculator = CartCalculator::getInstance();

// Add products to the cart
$samsung = new TV(1000, 'Samsung', 50);
$apple = new Phone(10000, 'Apple', 6.2);
$tefal = new Pan(2000, 'Tefal', 10);

$calculator->addProduct($samsung)
    ->addProduct($apple)
    ->addProduct($tefal);

// Calculate the total price
$totalPrice = $calculator->calculateTotalPrice();

echo $apple->getDetails().PHP_EOL;
echo $samsung->getDetails().PHP_EOL;
echo $tefal->getDetails().PHP_EOL;
echo "Total Price: " . $totalPrice . PHP_EOL;