<?php

namespace Bearcodi\CPDF\Driver;

use Bearcodi\CPDF\Driver\DriverContract;

abstract class BaseDriver implements DriverContract
{
    /**
     * Return the path when used in string interpolation.
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->path();
    }
}