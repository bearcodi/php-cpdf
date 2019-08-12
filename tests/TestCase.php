<?php

namespace Bearcodi\CPDF\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function pathTest($path)
    {
        return realpath(__DIR__ . "/{$path}");
    }
    
    protected function pathSrc($path)
    {
        return realpath(__DIR__ . "/../src/{$path}");
    }
}