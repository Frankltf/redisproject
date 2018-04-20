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
        $this->render('login');
    }
    public function home(){
        $this->render('home');
    }
    public function register(){
       $username=$_POST['username'];  
       $password=$_POST['password'];
       $model_login=new Login();
       $condition['username']=$username;
       $condition['password']=$password;
       $res=$model_login->saveuser($condition);
       $result['msg']='success';
       $result['status']=200;
       if($res){
           $result['msg']='success';
           $result['status']=200;
           echo json_encode($result);
       }else{
           $result['msg']='fail';
           $result['status']=500;
           echo json_encode($result);
       }
    }
    public function loginin(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $model_login=new Login();
        $condition['username']=$username;
        $condition['password']=$password;
        $res=$model_login->findbyname($condition);
        $result['msg']='success';
        $result['status']=200;
        if($res){
            $result['msg']='success';
            $result['status']=200;
            echo json_encode($result);
        }else{
            $result['msg']='fail';
            $result['status']=500;
            echo json_encode($result);
        }
    }

}
