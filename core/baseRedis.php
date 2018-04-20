<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/20
 * Time: 11:24
 */
namespace core;
class BaseRedis{
    private $host;
    private $port;
    public $redisdb;
    private static $instance;
    private function __construct(){
        $this->host=getconfig('redis','HOST');
        $this->port=getconfig('redis','PORT');
        $redis=new \Redis();
        $redis->connect($this->host,$this->port);
        $this->redisdb=$redis;
    }
    private function __clone(){}
    public static function getinstance(){
        if(!self::$instance){
            self::$instance=new self;
        }
        return self::$instance;
    }
}
