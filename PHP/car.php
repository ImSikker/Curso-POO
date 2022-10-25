<?php
class Car{
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }
    
    public function printDataCar(){
        echo "license: $this->license, driver: {$this->driver->name}, document: {$this->driver->document}";

    }

    public function getpassenger() {
        return $this -> passenger;
    }


    public function setpassenger($passenger){
        if ($passenger == 4) {
            $this->passenger = $passenger;
        }
        else {
            echo "Necesitas asignar 4 pasajeros";
        }
    }
}