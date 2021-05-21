<?php

namespace Recharge;

class Car implements CarInterface
{

    public function isTruck(): bool
    {
        return false;
    }
}
