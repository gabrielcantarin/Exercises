<?php

class BubbleTest extends PHPUnit_Framework_TestCase 
{
	public function testCorrectOrdering() {
        $bubble = new Bubble();

        $this->assertEquals([1,2,3,4], $bubble->bubbleOrdering([4,1,2,3]));
    }
}
?>