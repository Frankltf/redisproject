<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/17
 * Time: 15:19
 */
class Route{
    public function parse(){
        if(!empty($GLOBALS['CONTENT_TYPE']) && $GLOBALS['CONTENT_TYPE']=='application/json'){
        	$_POST=json_decode($GLOBALS['HTTP_RAW_POST_DATA']);
        }
        $_POST =  json_decode( json_encode( $_POST),true);
        if(judgerequest()=='get'){
        	$action=empty($_GET)?'test':$_GET['action'];
        	$method=empty($_GET)?'base':$_GET['method'];
        }else if(judgerequest()=='post'){
        	$action=empty($_POST)?'test':$_POST['action'];
        	$method=empty($_POST)?'base':$_POST['method'];
        }
        require(ROOTPATH.'/controller/'.$action.'.php');

        $action=ucfirst($action);
 
        $controller=new $action();

        $controller->$method();
    }
}