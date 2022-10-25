<?php
require_once("car.php");

class uberX extends Car {
    public $brand;
    public $model;


    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }
    public function printDataCar(){
        echo "license: $this->license, driver: {$this->driver->name}, document: {$this->driver->document}, model: {$this->model}, brand: {$this->brand}";

    }

}


?>