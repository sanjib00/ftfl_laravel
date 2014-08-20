<?php // lesson/tests/PracticeTest.php

class PracticeTest extends PHPUnit_Framework_TestCase {
    public function testVariable()
    {
        $val = null;
        $this->assertEquals(0, $val);
        $val = null;
        $this->assertSame(null, $val);

        $greeting = 'Hello, World.';
        $this->assertEquals('Hello, World.', $greeting);


    }
}
