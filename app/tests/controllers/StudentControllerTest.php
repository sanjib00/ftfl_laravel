<?php

class StudentControllerTest extends TestCase{

        public function testStudentSayhi(){

            $this->call('GET','student/sayhi');
            $this->assertResponseOk();
        }


}