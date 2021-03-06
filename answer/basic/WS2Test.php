<?php

use Laracon\basic\WS2;
use PHPUnit\Framework\TestCase;

class WS2Test extends TestCase
{
    public function testCalPriIncTax()
    {
        $tax = new WS2();

        $this->assertEquals(105, $tax->calPriIncTax(100, 0.05));
        $this->assertEquals(108, $tax->calPriIncTax(100, 0.08));
        $this->assertEquals(110, $tax->calPriIncTax(100, 0.10));
    }
}
