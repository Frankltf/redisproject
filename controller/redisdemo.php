<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/20
 * Time: 10:50
 */
require_once ROOTPATH.'/core/basecontroller.php';
use redismodels\Login;
class Redisdemo extends Basecontroller{
    public function login(){
        $model_login=new Login();
        $model_login->saveuser();
        $this->render('login');
    }
    public function home(){
        $this->render('home');
    }
    public function register(){
        print_r($_POST);
    }
}