<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/20
 * Time: 11:37
 */
namespace redismodels;
use core\BaseRedis;
class Login{
    public function saveuser($con){
        $redis=BaseRedis::getinstance();
        $userid=$redis->redisdb->incr('global:userid');
        $redis->redisdb->set('user:userid:'.$userid.':username',$con['username']);
        $redis->redisdb->set('user:userid:'.$userid.':password',$con['password']);
        $redis->redisdb->set('user:username:'.$con['username'].':userid',$userid);
        return true;
    }
    public function findbyname($con){
        $redis=BaseRedis::getinstance();
        $userid=$redis->redisdb->get('user:username:'.$con['username'].':userid');
        if(!$userid){
            return FALSE;
        }
        $password=$redis->redisdb->get('user:userid:'.$userid.':password');
        if($password==$con['password']){
            $time=1*60;
            session_set_cookie_params($time);
            session_start();
            $_SESSION['userid']=$userid;
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function savepost($data){
        sesstion_start();
        $redis=BaseRedis::getinstance();
        $userid=$_SESSION['userid'];
        var_dump($userid);
        die();
    }
}
