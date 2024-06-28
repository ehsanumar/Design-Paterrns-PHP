<?php
class Singleton {

private static $instance = null; // Stores the single instance
public $value; // Public variable to hold data

    public static function getInstance() {
        if (self::$instance === null) { // Check if instance exists
            self::$instance = new self(); // Create instance if not
        }
        return self::$instance;
    }

    public function setValue($value) {
        $this->value = $value; // Set the value for the single instance
    }

    public function getValue() {
        return $this->value; // Return the value from the single instance
    }

}
