<?php // lesson/tests/PracticeTest.php

class PracticeTest extends PHPUnit_Framework_TestCase {

        public function testFamilyRequiresParent()
    {
        $family = [
            'parents' => 'Joe',
            'children' => ['Timmy', 'Suzy']
        ];

$this->assertArrayHasKey('parents', $family); // true}
    }
}
