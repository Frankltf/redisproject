<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/17
 * Time: 15:06
 */
class AutoLoad{
    public function register(){
        spl_autoload_register(array($this,'my_autoload'));
    }
    public function my_autoload($className){
        $arr=explode('\\',$className);
        require_once ROOTPATH.'/'.$arr[0].'/'.lcfirst($arr[1]).'.php';

    }
}