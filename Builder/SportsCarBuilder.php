<?php
require_once 'Car.php';
require_once 'CarBuilder.php';

// The 'SportsCarBuilder' class implements the 'CarBuilder' interface to build a sports car
class SportsCarBuilder implements CarBuilder {
    private $car;

    // Initializes a new Car object when the builder is created
    public function __construct() {
        $this->car = new Car();
    }

    // Builds the engine part of the car
    public function buildEngine() {
        $this->car->setEngine("V8 Engine");
    }

    // Builds the wheels part of the car
    public function buildWheels() {
        $this->car->setWheels("Sport Wheels 4");
    }

    // Builds the body part of the car
    public function buildBody() {
        $this->car->setBody("Sporty Body XL");
    }

    // Returns the constructed car
    public function getCar() {
        return $this->car;
    }
}
