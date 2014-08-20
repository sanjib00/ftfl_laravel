<?php

class WelcomeControllerTest extends TestCase{

    public function testLoadingWelcomeSayHello(){

        $this->call('GET','welcome/sayhello');
        $this->assertResponseOk();
    }


}

