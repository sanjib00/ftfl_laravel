<?php // lesson/tests/PracticeTest.php

class PracticeTest extends PHPUnit_Framework_TestCase {

    public function testAssertInternalType()
{
$family = [
'parents' => ['Joe'],
'children' => ['Timmy', 'Suzy']
];

$this->assertInternalType('array', $family['parents']); // false
    $name = 'Sanjib';
    $this->assertInternalType('string', $name);

}
}