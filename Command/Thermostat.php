<?php
// The Thermostat class knows how to perform thermostat-specific operations.
class Thermostat
{
    private $temperature;
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
        echo "Thermostat set to " . $temperature . " degrees\n";
    }
}