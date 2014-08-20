<?php // lesson/tests/PracticeTest.php
class DateFormatter {
    protected $stamp;
    public function __construct(DateTime $stamp)
{
$this->stamp = $stamp;
}

public function getStamp()
{
    return $this->stamp;
}
}


class PracticeTest extends PHPUnit_Framework_TestCase {

    public function testStampMustBeInstanceOfDateTime()
{
$date = new DateFormatter(new DateTime);

$this->assertInstanceOf('DateTime', $date->getStamp()); // true
}
}