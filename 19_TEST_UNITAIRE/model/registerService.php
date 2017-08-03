<?php

/****
 * Class registerService
 * Special thanks to Zoukilama for this object and testRegisterService.php
 * Original repository: https://github.com/zoukilama/MVC_FLIGHT_PHPUNIT
 * Corrections & modifications made by: leDebutant
 */


class registerService
{
    private $params;
    private $error;
    private $user;

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



    public function launchControls(){

        if(empty($this->params['username'])){
            $this->error['username'] = 'Nom utilisateur manquant';
        }
        if(strlen($this->params['username']) < 8) {
            $this->error['username'] = 'Nom utilisateur trop court 8 charactère minimum';
        } else if(strlen($this->params['username']) > 16) {
            $this->error['username'] = 'Nom utilisateur trop long 16 charactère maximum';
        }

        if(empty($this->params['password'])){
            $this->error['password'] = 'Mot de passe manquant';
        }
        if(strlen($this->params['password']) < 8) {
            $this->error['password'] = 'Mot de passe trop court 8 charactère minimum';
        } else if(strlen($this->params['password']) > 16) {
            $this->error['password'] = 'Mot de passe trop long 16 charactère maximum';
        }
        if($this->params['password'] != $this->params['confirmPassword']) {
            $this->error['confirmPassword'] = 'Les mot de passe ne sont pas identique';
        }

        if (!filter_var($this->params['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error['email'] = 'Le format de l\'adresse mail n\'est pas valide';
        }
        if(empty($this->error)==false){
            return $this->error;
        }

        $this->username = $this->checkUsernameExist();
        if(empty($this->username)==false) {
            $this->error['username'] = 'Nom d\'utilisateur indisponible';
        }
        $this->email = $this->checkEmailExist();
        if(empty($this->email)==false) {
            $this->error['email'] = 'L\'adresse mail est déjà utiliser';
        }
        if(empty($this->error)==false){
            return $this->error;
        }
        $this->user = $this->insertUser();
        if(empty($this->user)){
            $this->error['identifiants'] = 'Le nom d\'utilisateur ou mot de passe incorrect';
            return $this->error;
        }else{
            return $this->user;
        }
    }

    /***
     * Il est évident que cette fonction ne va pas ici mais plutot dans BddManager ou RegisterRepository
     */
    public function checkUsernameExist() {
        $username = $this->params['username'];
        $connexion = new PDO('mysql:host=localhost;dbname=blog;charset=UTF8','root','');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $object = $connexion->prepare('SELECT username FROM user WHERE username=:username');
        $object->execute(array(
            'username'=>$username
        ));
        $user = $object->fetchAll(PDO::FETCH_ASSOC);
        if(empty($user)==true){
            return $user;
        }
        return true;
    }

    public function checkEmailExist() {
        $email = $this->params['email'];
        $connexion = new PDO('mysql:host=localhost;dbname=blog;charset=UTF8','root','');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $object = $connexion->prepare('SELECT email FROM user WHERE email=:email');
        $object->execute(array(
            'email'=>$email
        ));
        $email = $object->fetchAll(PDO::FETCH_ASSOC);
        if(empty($email)==true){
            return $email;
        }
        return true;
    }

    public function insertUser(){
        $username = $this->params['username'];
        $password = $this->params['password'];
        $email    = $this->params['email'];
        $connexion = new PDO('mysql:host=localhost;dbname=blog;charset=UTF8','root','');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $object = $connexion->prepare('INSERT INTO user SET username=:username,email=:email,password=:password');
        $object->execute(array(
            'password'=>md5($password),
            'username'=>$username,
            'email'=> $email
        ));
        $result = $object->rowCount();

        if(empty($result)==false){
            return $result;
        }
        return false;
    }
}
?>