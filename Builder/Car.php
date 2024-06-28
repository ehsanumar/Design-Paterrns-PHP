<?php
// The 'Car' class is the product we are building
class Car {
    private $engine;
    private $wheels;
    private $body;

    // Sets the engine part of the car
    public function setEngine($engine) {
        $this->engine = $engine;
    }

    // Sets the wheels part of the car
    public function setWheels($wheels) {
        $this->wheels = $wheels;
    }

    // Sets the body part of the car
    public function setBody($body) {
        $this->body = $body;
    }

    // Displays the car details
    public function show() {
        echo "Engine: " . $this->engine . "\n";
        echo '<br>';
        echo "Wheels: " . $this->wheels . "\n";
        echo '<br>';
        echo "Body: " . $this->body . "\n";
    }
}
