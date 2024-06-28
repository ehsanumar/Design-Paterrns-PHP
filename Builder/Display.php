<?php
require_once 'SportsCarBuilder.php';
require_once 'CarDirector.php';

// Create a builder for a sports car
$builder = new SportsCarBuilder();

// Create a director and associate it with the sports car builder
$director = new CarDirector($builder);

// The director constructs the car using the builder
$director->buildCar();

// Get the constructed car from the builder
$car = $director->getCar();

// Display the details of the constructed car
$car->show();
