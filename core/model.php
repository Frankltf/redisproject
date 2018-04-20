<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/12
 * Time: 16:44
 */
require_once ROOTPATH.'/core/mysql.php';

class Model implements Mysql {
    private $dbms;
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpass;
    private $dbo;
    private static $_instance;
    private function __construct() {
        $this->dbms=getconfig('DBMS');
        $this->dbhost=getconfig('DBHOST');
        $this->dbname=getconfig('DBNAME');
        $this->dbuser=getconfig('DBUSER');
        $this->dbpass=getconfig('DBPASS');
        $dbdsn=$this->dbms.":host=".$this->dbhost.';dbname='.$this->dbname;
        $dbh=new PDO($dbdsn,$this->dbuser,$this->dbpass);
        $this->dbo=$dbh;
    }
    private function __clone(){}
    public static function getInstance(){
        if(!self::$_instance){
            self::$_instance=new self;
        }
        return self::$_instance;
    }
    public function query($sql){
        return $this->dbo->query($sql);
    }
    
}