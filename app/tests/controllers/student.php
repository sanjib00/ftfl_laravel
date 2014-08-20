<?php
/**
 * Created by PhpStorm.
 * User: BCC
 * Date: 8/20/14
 * Time: 10:59 AM
 */

class Student {

    public $id;
    public $name;

}

class PracticeTest extends PHPUnit_Framework_TestCase {

    public function testAssertInstanceOf()
    {
        $a_Student = new Student();

        $this->assertInstanceOf('Student',$a_Student); // true
    }
}