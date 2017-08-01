<?php

//include_once 'autoloader.php';

require 'model/loginService.php';

//NAMESPACE (nous ne les avons pas vu)
//Ceci nous permet d'utiliser la library PHPUNIT
use PHPUnit\Framework\TestCase;

class testLoginService extends TestCase
{

    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    /** ICI JE COMMENCE A TESTER NOTRE SERVICE LOGIN
     * Je teste si notre username est vide
     * */
    public function testNoUsername(){
        $array = array(
            'username' => '',
            'password' => 'monPasswordTabernacle'
        );
        $service = new loginService();
        $service->setParams($array);
        $service->launchControls($array);
        $this->assertArrayHasKey('username',$service->getError());
    }


    public function testNoPassword(){
        $array = array(
            'username' => 'apocalypse',
            'password' => ''
        );
        $service = new loginService();
        $service->setParams($array);
        $service->launchControls($array);
//        var_dump($service->getError());
        $this->assertArrayHasKey('password',$service->getError());
    }

    public function testCredentialsBadPassword(){
        $service = new loginService();

        $array = array(
            'username' => 'apocalypse',
            'password' => 'gui'
        );
        $service->setParams($array);
        $service->launchControls($array);
        $this->assertEquals(false,$service->getUser());
    }

    public function testCredentialsBadUsername(){
        $service = new loginService();
        $array = array(
            'username' => 'apocaly',
            'password' => 'guimauve'
        );
        $service->setParams($array);
        $service->launchControls($array);
        $this->assertEquals(false,$service->getUser());
    }

    public function testCredentials(){
        $service = new loginService();
//        /*** AVEC LES BONS IDENTIFIANTS ***/
        $array = array(
            'username' => 'apocalypse',
            'password' => 'guimauve'
        );
        $service->setParams($array);
        $service->launchControls($array);

        $this->assertEquals(true,is_array($service->getUser()));
        $this->assertArrayHasKey('id',$service->getUser()[0]);
    }
//
//    private function launchControls($array){
//        $service = new loginService();
//        $service->setParams($array);
//        $service->launchControls();
//        return $service;
//    }
}