<?php

class PracticeTest extends PHPUnit_Framework_TestCase{
public function testControllerIncludesDayle()
{
$names = ['Taylor', 'Shawn','Hasan' ];
$this->assertContains('Hasan', $names);

    $names = ['Taylor', 'Shawn', 'Ruhi'];
    $this->assertNotContains('Sanjib', $names);
}

}
?>