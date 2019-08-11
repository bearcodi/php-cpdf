<?php
namespace Bearcodi\CPDF;

use Bearcodi\CPDF\Driver\DriverContract;

class CPDF
{
    /**
     * Currently set CPDF driver.
     * 
     * @var \Bearcodi\CPDF\Driver\DriverContract
     */
    protected $driver;
    
    /**
     * Set the CPDF driver contract.
     * 
     * @param \Bearcodi\CPDF\Driver\DriverContract $driver
     */
    public function __construct(DriverContract $driver)
    {
        $this->driver = $driver;
    }
    
    /**
     * Return the currently set driver instance.
     * 
     * @return \Bearcodi\CPDF\Driver\DriverContract
     */
    public function driver()
    {
        return $this->driver;
    }
}