<?php

class BinaryTest extends PHPUnit_Framework_TestCase
{

    public function testCorrectSearch() {
        $binary = new Binary();

        $this->assertEquals(3, $binary->binarySearch(6,[0,2,4,6,8,10]));
    }
}