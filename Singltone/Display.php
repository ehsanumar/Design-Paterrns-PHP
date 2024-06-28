<?php

require_once 'Singleton.php'; // Include the Singleton class definition

$instance1 = Singleton::getInstance(); // Get the singleton instance
$instance2 = Singleton::getInstance(); // Get the singleton instance again

$instance1->setValue('Singleton'); // Set the value for the single instance
echo $instance1->getValue(); // Output: Singleton (value is stored in the single instance)
echo '<br>';

echo $instance2->getValue(); // Output: Singleton (value from instance1 persists)
echo '<br>';

var_dump($instance1 === $instance2); // Output: true (both point to the same instance)
