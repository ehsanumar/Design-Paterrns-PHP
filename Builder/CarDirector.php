<?php
require_once 'CarBuilder.php';

// The 'CarDirector' class is responsible for managing the construction process
class CarDirector {
    private $builder;

    // Associates a builder with the director
    public function __construct(CarBuilder $builder) {
        $this->builder = $builder;
    }

    // Directs the builder to construct the car
    public function buildCar() {
        $this->builder->buildEngine();
        $this->builder->buildWheels();
        $this->builder->buildBody();
    }

    // Returns the constructed car
    public function getCar() {
        return $this->builder->getCar();
    }
}
