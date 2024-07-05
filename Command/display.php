<?php
require_once 'Light.php';
require_once 'Thermostat.php';
require_once 'LightOnCommand.php';
require_once 'LightOffCommand.php';
require_once 'SetThermostatCommand.php';
require_once 'RemoteControl.php';

// Create the receiver objects
$light = new Light();
$thermostat = new Thermostat();

// Create command objects and associate them with the receivers
$lightOnCommand = new LightOnCommand($light);
$lightOffCommand = new LightOffCommand($light);
$setThermostatCommand = new SetThermostatCommand($thermostat, 22);

// Create the invoker
$remoteControl = new RemoteControl();

// Execute the light on command
$remoteControl->setCommand($lightOnCommand);
$remoteControl->pressButton(); // Output: Light is On

// Execute the light off command
$remoteControl->setCommand($lightOffCommand);
$remoteControl->pressButton(); // Output: Light is Off

// Execute the set thermostat command
$remoteControl->setCommand($setThermostatCommand);
$remoteControl->pressButton(); // Output: Thermostat set to 22 degrees
