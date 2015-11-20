<?php

class LinearTest extends PHPUnit_Framework_TestCase 
{
	public function testCorrectSearch() {
        $linear = new Linear();

        $this->assertEquals(3, $linear->linearSearch(6,[0,2,4,6,8,10]));
    }
}
?>