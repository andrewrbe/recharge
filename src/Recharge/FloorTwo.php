<?php

namespace Recharge;

use http\Exception\RuntimeException;

class FloorTwo implements FloorInterface
{

    private int $pointer = 0;

    public function isCarAllowed(CarInterface $car): bool
    {
        return !$car->isTruck();
    }

    public function park(CarInterface $car): void
    {
        if ($car->isTruck()) {
            throw new RuntimeException("Trucks are forbidden");
        }
        if ($this->hasPlace()) {
            $this->pointer++;
            echo "#{$this->pointer} Parked on the second floor\n";
            return;
        }
        echo "No space";
    }

    public function hasPlace(): bool
    {
        return $this->pointer < $this->maxPlaces();
    }

    public function maxPlaces(): int
    {
        return 10;
    }
}
