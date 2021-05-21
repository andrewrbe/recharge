<?php
namespace Recharge;
interface ParkingLogInterface {
    public function park() :void;
    public function maxPlaces() :int;
}
