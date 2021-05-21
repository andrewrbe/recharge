<?php

namespace Recharge;

class ParkingLot
{

    /**
     * @var FloorInterface[]
     */
    private array $floors = [];

    public function __construct(array $floors)
    {
        $this->floors = $floors;
    }

    /**
     * @throws NoSpaceException
     */
    public function park(CarInterface $car): void
    {
        foreach ($this->floors as $floor) {
            if (!$floor->isCarAllowed($car)) {
                echo "Forbidden truck for the second floor \n";
                continue;
            }
            if ($floor->hasPlace()) {
                $floor->park($car);
                break;
            }
        }
    }
}
