<?php
require_once 'commandInterface.php';
require_once 'Thermostat.php';

// The SetThermostatCommand class implements the Command interface to set the thermostat.
class SetThermostatCommand implements commandInterface
{
    private $thermostat;
    private $temperature;
    public function __construct(Thermostat $thermostat,$temperature)
    {
        $this->thermostat = $thermostat;
        $this->temperature = $temperature;
    }
    public function execute()
    {
        $this->thermostat->setTemperature($this->temperature);
    }
}