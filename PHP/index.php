<?php
require_once("uberX.php");
require_once("uberPool.php");
require_once("car.php");
require_once("account.php");
require_once("uberVan.php");

$uberX = new UberX("SRE45", new Account("Andres Herro", "AEFA23 "), "Chevrolet ", "Spak"); 
$uberX->printDataCar();

$uberPool= new UberPool("SRE45", new Account("Andrea Herro", "AHFA23 "), "Dodge", "Atitufe");
$uberPool->printDataCar();

$uberVan = new UberVan("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

?>