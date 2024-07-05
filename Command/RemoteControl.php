<?php
// The RemoteControl class is the invoker that asks
// the command to carry out the request.
class RemoteControl
{
    private $command;
    public function setCommand(commandInterface  $command)
    {
        $this->command = $command;
    }
    public function pressButton() {
        $this->command->execute();
    }
}