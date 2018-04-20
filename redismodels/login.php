<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/20
 * Time: 11:37
 */
namespace redismodels;
require_once ROOTPATH.'/core/redis.php';
class Login{
    public function saveuser(){
        $redis=BaseRedis::getinstance();
        $redis->set('classkey','one');
        
    }
}