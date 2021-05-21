<?php

namespace Recharge;

interface FloorInterface
{
    public function isCarAllowed(CarInterface $car): bool;

    public function maxPlaces(): int;

    public function hasPlace(): bool;

    public function park(CarInterface $car): void;

}
