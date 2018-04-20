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
        $userid=$_GET['userid'];
        $this->render('home',array('userid'=>$userid));
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
        if($res){
            $result['msg']='success';
            $result['status']=200;
            $result['userid']=$res;
            echo json_encode($result);
        }else{
            $result['msg']='fail';
            $result['status']=500;
            echo json_encode($result);
        }
    }

    public function faweibo() {
        $content=$_POST['content'];
        $model_login=new Login();
        $con['content']=$content;
        $res=$model_login->savepost($con);
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
    public function profile(){
        $userid=$_GET['userid'];
        $this->render('profile',array('userid'=>$userid));
    }
    public function timeline(){
        $this->render('timeline');
    }
    public function guanzhu(){
        print_var($_GET);
    }

}
