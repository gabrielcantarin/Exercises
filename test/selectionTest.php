<?php

class SelectionTest extends PHPUnit_Framework_TestCase 
{
	public function testCorrectOrdering() {
        $selection = new Selection();

        $this->assertEquals([1,2,3,4], $selection->selectionOrdering([4,1,2,3]));
    }
}
?>