<?php
require 'model/registerService.php';
use PHPUnit\Framework\TestCase;

class testRegisterService extends TestCase
{
    public function testNoUsername(){
        $array = array(
            'username' => '',
            'password' => 'monPasswordTabernacle',
            'confirmPassword' => 'monPasswordTabernacle',
            'email' => 'zoukilama@gmail.com'
        );
        $service = new registerService();
        $service->setParams($array);
        $service->launchControls();
//        var_dump($service->getError());
        $this->assertArrayHasKey('username',$service->getError());
    }

    public function testNoPassword(){
        $array = array(
            'username' => 'zoukilama',
            'password' => '',
            'confirmPassword' => 'monPasswordTabernacle',
            'email' => 'zoukilama@gmail.com'
        );
        $service = new registerService();
        $service->setParams($array);
        $service->launchControls();
//        var_dump($service->getError());
        $this->assertArrayHasKey('password',$service->getError());
    }

    public function testNoConfirmPassword(){
        $array = array(
            'username' => 'zoukilama',
            'password' => 'monPasswordTabernacle',
            'confirmPassword' => '',
            'email' => 'zoukilama@gmail.com'
        );
        $service = new registerService();
        $service->setParams($array);
        $service->launchControls();
//        var_dump($service->getError());
        $this->assertArrayHasKey('confirmPassword',$service->getError());
    }

    public function testNoEmail(){
        $array = array(
            'username' => 'zoukilama',
            'password' => 'monPasswordTabernacle',
            'confirmPassword' => 'monPasswordTabernacle',
            'email' => '',
        );
        $service = new registerService();
        $service->setParams($array);
        $service->launchControls();
//        var_dump($service->getError());
        $this->assertArrayHasKey('email',$service->getError());
    }

    public function testCredentialsBadPassword(){
        $service = new registerService();
        $array = array(
            'username' => 'zoukilama',
            'password' => 'monPasswordTabernacle',
            'confirmPassword' => 'monPasswordTabernacle',
            'email' => 'zoukilama@gmail.com'
        );
        $service->setParams($array);
        $service->launchControls();
//        var_dump($service->getError());
        $this->assertEquals(false,$service->getUser());
    }

    public function testCredentialsBadUsername(){
        $service = new registerService();
        $array = array(
            'username' => 'zoukilama',
            'password' => 'monPasswordTabernacle',
            'confirmPassword' => 'monPasswordTabernacle',
            'email' => 'zoukilama@gmail.com'
        );
        $service->setParams($array);
        $service->launchControls();
//        var_dump($service->getError());
        $this->assertEquals(false,$service->getUser());
    }

    /***
     * Attention l'insert ne sera pas toujours valide. Normalement si tout ce passe bien
     * nous sommes sensés avoir un 1 qui est le nombre de ligne affectées par la requête.
     *
     * Donc si nous faisons ce test deux fois d'affilé comme ce test ne marchera que si
     * les crédentielles ne sont pas en base de données il faudra soit commenter le tests, soit
     * attribuer un 1 d'office.
     * On aura une base de données alternatives pour tester ce genre de requêtes.
     */
    public function testInsertUser(){
        $service = new registerService();
        $array = array(
            'username' => 'zoukilama',
            'password' => 'monPassword',
            'confirmPassword' => 'monPassword',
            'email' => 'zoukilama@gmail.com'
        );
        $service->setParams($array);
        $service->launchControls();
//        var_dump($service->getError());
        $this->assertEquals(1,$service->getUser());
    }
}
?>