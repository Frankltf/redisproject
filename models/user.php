<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/12
 * Time: 17:38
 */

require_once ROOTPATH.'/core/db.php';
class User extends Db{
    public function __construct() {
        parent::__construct();
    }
    public function getall(){
        $q='select * from user where password = 123';
       $res=$this->query($q);
        return $res;
    }
}