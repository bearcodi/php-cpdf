<?php

namespace Bearcodi\CPDF\Tests\Unit;

use Bearcodi\CPDF\Tests\TestCase;
use Bearcodi\CPDF\CPDF;
use Bearcodi\CPDF\Driver\CPDFLinux;
use Bearcodi\CPDF\Driver\DriverContract;

class CPDFTest extends TestCase
{
    /** @test */
    public function it_stores_the_driver()
    {
        $cpdf = new CPDF(new CPDFLinux);
        
        $this->assertInstanceOf(DriverContract::class, $cpdf->driver());
    }
}