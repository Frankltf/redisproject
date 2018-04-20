<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/20
 * Time: 10:50
 */
require_once ROOTPATH.'/core/basecontroller.php';
class Redisdemo extends Basecontroller{
    public function login(){
        $this->render('login');
    }
    public function home(){
        $this->render('home');
    }
}