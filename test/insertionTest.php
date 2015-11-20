<?php

class InsertionTest extends PHPUnit_Framework_TestCase 
{
	public function testCorrectOrdering() {
        $insertion = new Insertion();

        $this->assertEquals([1,2,3,4], $insertion->insertionOrdering([4,1,2,3]));
    }
}
?>