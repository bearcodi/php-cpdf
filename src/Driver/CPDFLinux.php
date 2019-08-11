<?php

namespace Bearcodi\CPDF\Driver;

use Bearcodi\CPDF\Driver\Base;

class CPDFLinux extends Base
{
    /**
     * Return the binary path
     * 
     * @return string
     */
    public function path() :string
    {
        return realpath(__DIR__ . '/../bin/cpdf-linux-64bit');
    }
}