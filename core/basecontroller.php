<?php
class Basecontroller{
    protected function render($file,$data=[]){
        header("content-type:text/html;charset=utf8");
        if(judgerequest()=='get'){
            $dir=empty($_GET)?"test":$_GET['action'];
        }else if(judgerequest()=='post'){
            $dir=empty($_POST)?"test":$_POST['action'];
        }
        $res=ROOTPATH.'/view/'.$dir.'/'.$file.'.php';
        if(!empty($data)){
            extract($data);
        }
        if(is_file($res)){
            include_once $res;
        }
    }

}