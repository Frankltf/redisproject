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
            $redis->redisdb->set('token:userid',$userid);
            $redis->redisdb->setTimeout('token:userid',60*2);
            return $userid;
        }else{
            return FALSE;
        }
    }
    public function savepost($con){
        $redis=BaseRedis::getinstance();
        $userid=$redis->redisdb->get('token:userid');
        $postid=$redis->redisdb->incr('global:postid');
        $redis->redisdb->set('post:postid:'.$postid.':postcontent',$con['content']);
        $redis->redisdb->set('post:postid:'.$postid.':createtime',time());
        $redis->redisdb->set('post:postid:'.$postid.':userid',$userid);
        return TRUE;
    }
    public function care($con){
        $redis=BaseRedis::getinstance();
        $userid=$redis->redisdb->get('token:userid');
        $redis->redisdb->sAdd('following:userid:'.$userid,$con['userid']);
        return TRUE;
    }
    public function getpost($con){
        $redis=BaseRedis::getinstance();
        # TODO 如何取出符合条件的多条数据
        $list=$redis->redisdb->sort('post:postid:'.);
    }
}
