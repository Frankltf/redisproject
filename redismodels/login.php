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
}
