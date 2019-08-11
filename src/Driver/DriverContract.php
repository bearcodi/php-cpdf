<?php

namespace Bearcodi\CPDF\Driver;

interface DriverContract
{
    /**
     * Return the binary path
     * 
     * @return string
     */
    public function path() :string;
}