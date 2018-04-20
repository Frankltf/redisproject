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
    public function saveuser(){
        $redis=BaseRedis::getinstance();
        $redis->set('classkey','one');
        
    }
}