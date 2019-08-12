<?php

namespace Bearcodi\CPDF\Tests\Unit\Drivers;

use Bearcodi\CPDF\Tests\TestCase;
use Bearcodi\CPDF\Driver\LinuxDriver;

class LinuxDriverTest extends TestCase
{
    /** @test */
    public function the_driver_returns_the_realpath_to_bin_file()
    {
        $binPath = $this->pathSrc('bin/cpdf-linux-64bit');
        
        $driver = new LinuxDriver;
        
        $this->assertEquals($binPath, $driver->path());
        
        $this->assertEquals($binPath, $driver);
    }
}