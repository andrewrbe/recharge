<?php

use Recharge\Car;
use Recharge\FloorOne;
use Recharge\FloorTwo;
use Recharge\ParkingLot;
use Recharge\Truck;

require_once './vendor/autoload.php';

$parkingLot = new ParkingLot([new FloorOne(), new FloorTwo()]);


for ($i = 0; $i < 21; $i++) {
    if ($i < 11) {
        $parkingLot->park(new Car());
    } else {
        $parkingLot->park(new Truck());
    }
}


?>
