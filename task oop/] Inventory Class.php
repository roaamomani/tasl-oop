<?php

class Inventory {
    private $cars = [];

    public function addCar(Car $car) {
        $this->cars[$car->getVin()] = $car;
    }

    public function removeCar($vin) {
        if (isset($this->cars[$vin])) {
            unset($this->cars[$vin]);
        } else {
            echo "Car with VIN $vin not found.\n";
        }
    }

    public function listCars() {
        foreach ($this->cars as $car) {
            echo $car->getDetails() . "\n";
        }
    }
}

?>
