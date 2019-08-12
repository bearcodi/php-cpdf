<?php

namespace Bearcodi\CPDF\Driver;

use Bearcodi\CPDF\Driver\BaseDriver;

class LinuxDriver extends BaseDriver
{
    /**
     * Return the binary path
     * 
     * @return string
     */
    public function path()
    {
        return realpath(__DIR__ . '/../bin/cpdf-linux-64bit');
    }
}