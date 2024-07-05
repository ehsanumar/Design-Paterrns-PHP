<?php
require_once 'Light.php';
require_once 'commandInterface.php';

// The LightOnCommand class implements the Command interface to turn on the light.
class LightOnCommand implements commandInterface
{
private $light;
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->On();
    }
}