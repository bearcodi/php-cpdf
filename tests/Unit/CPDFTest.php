<?php

namespace Bearcodi\CPDF\Tests\Unit;

use Bearcodi\CPDF\Tests\TestCase;
use Bearcodi\CPDF\CPDF;
use Bearcodi\CPDF\Driver\LinuxDriver;
use Bearcodi\CPDF\Driver\DriverContract;

class CPDFTest extends TestCase
{
    /** @test */
    public function it_stores_the_driver()
    {
        $cpdf = new CPDF(new LinuxDriver);
        
        $this->assertInstanceOf(DriverContract::class, $cpdf->driver());
    }
}