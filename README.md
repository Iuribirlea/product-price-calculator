# Product Cart Application

This is a simple product cart application that allows you to manage a list of products and calculate the total price of the cart.

## Requirements

To run this application, make sure you have the following prerequisites installed on your system:

- PHP 7.4 or higher
- Composer (Dependency Manager for PHP)
- PHPUnit (For running unit tests)

## Installation

Follow these steps to install and set up the application:

1. Clone the repository:


    `git clone https://github.com/Iuribirlea/product-price-calculator.git`

2. Navigate to the project directory:


    `cd product-price-calculator`


3. Install the dependencies using Composer:




    `composer install`


## Usage

You can use the application by including the necessary files and using the provided classes in your own code. Here's an example of how to use the application:

```php
<?php

require 'vendor/autoload.php';

// Create an instance of the CartCalculator
$calculator = CartCalculator::getInstance();

// Add products to the cart
$samsung = new TV(1000, 'Samsung', 50);
$apple = new Phone(10000, 'Apple', 6.2);
$tefal = new Pan(2000, 'Tefal', 10);

$calculator->addProduct($samsung, 2)
    ->addProduct($apple)
    ->addProduct($tefal, 3);

// Calculate the total price
$totalPrice = $calculator->calculateTotalPrice();

echo $apple->getDetails().PHP_EOL;
echo $samsung->getDetails().PHP_EOL;
echo $tefal->getDetails().PHP_EOL;
echo "Total Price: " . $totalPrice . PHP_EOL;
```
## Testing

Unit tests have been provided to ensure the correct functionality of the application. To run the tests, use the following command:

`./vendor/bin/phpunit tests`