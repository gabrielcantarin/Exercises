<?php

class MergeTest extends PHPUnit_Framework_TestCase 
{
	public function testCorrectOrdering() {
        $merge = new Merge();

        $this->assertEquals([1,2,3,4], $merge->mergeOrdering([4,1,2,3]));
    }
}
?>