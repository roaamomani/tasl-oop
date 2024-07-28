<?php

require_once 'Car.php';
require_once 'Inventory.php';

// Create some Car objects
$car1 = new Car("Toyota", "Camry", "123456789");
$car2 = new Car("Honda", "Civic", "987654321");

// Create an Inventory object
$inventory = new Inventory();

// Add cars to the inventory
$inventory->addCar($car1);
$inventory->addCar($car2);

// List all cars in the inventory
echo "Listing all cars:\n";
$inventory->listCars();

// Remove a car by VIN
$inventory->removeCar("123456789");

// List all cars after removal
echo "\nListing all cars after removal:\n";
$inventory->listCars();

?>
