<?php

namespace Bearcodi\CPDF\Tests\Unit;

use Bearcodi\CPDF\Tests\TestCase;
use Bearcodi\CPDF\Driver\CPDFLinux;

class CPDFDriverLinuxTest extends TestCase
{
    /** @test */
    public function the_driver_returns_the_realpath_to_bin_file()
    {
        $binPath = realpath(__DIR__ . '/../../src/bin/cpdf-linux-64bit');
        
        $driver = new CPDFLinux;
        
        $this->assertEquals($binPath, $driver->path());
        
        $this->assertEquals($binPath, $driver);
    }
}