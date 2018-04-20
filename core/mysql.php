<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/13
 * Time: 9:37
 */
interface Mysql{
    public static function getInstance();
    public function query($sql);
}