<?php
// The 'CarBuilder' interface defines the methods that concrete builders must implement
interface CarBuilder {
    public function buildEngine();
    public function buildWheels();
    public function buildBody();
    public function getCar();
}
