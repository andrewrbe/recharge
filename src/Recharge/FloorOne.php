<?php

namespace Recharge;

class FloorOne implements FloorInterface
{

    private int $pointer = 0;

    public function isCarAllowed(CarInterface $car): bool
    {
        return true;
    }

    public function park($car): void
    {
        if ($this->hasPlace()) {
            $this->pointer++;
            echo "#{$this->pointer} Parked on the first floor\n";
            return;
        }
        echo "No space";
    }

    public function hasPlace(): bool
    {
        return $this->maxPlaces() > $this->pointer;
    }

    public function maxPlaces(): int
    {
        return 10;
    }
}
