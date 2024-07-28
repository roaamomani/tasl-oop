<?php

class Car {

    private $make;
    private $model;
    private $vin;

    public function __construct($make, $model, $vin) {
        $this->make = $make;
        $this->model = $model;
        $this->vin = $vin;
    }

    
    public function __destruct() {
        echo "Car with VIN {$this->vin} is being destroyed.\n";
    }

    // Getter for make
    public function getMake() {
        return $this->make;
    }

    // Setter for make
    public function setMake($make) {
        $this->make = $make;
    }

    // Getter for model
    public function getModel() {
        return $this->model;
    }

    // Setter for model
    public function setModel($model) {
        $this->model = $model;
    }

    // Getter for VIN
    public function getVin() {
        return $this->vin;
    }

    // Setter for VIN
    public function setVin($vin) {
        $this->vin = $vin;
    }

    // Method to get car details
    public function getDetails() {
        return "Make: {$this->make}, Model: {$this->model}, VIN: {$this->vin}";
    }
}

?>
