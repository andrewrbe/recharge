<?php

namespace Recharge;

class Truck implements \Recharge\CarInterface
{

    public function isTruck(): bool
    {
        return true;
    }
}
