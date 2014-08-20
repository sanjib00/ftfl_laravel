<?php // lesson/tests/PracticeTest.php

class PracticeTest extends PHPUnit_Framework_TestCase {
public function testHelloWorld()
{
$greeting = 'Hello, World.';

$this->assertFalse($greeting === 'ello, World.');


}

}