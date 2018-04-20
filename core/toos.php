<?php
function print_var($data){
    print_r('<pre style="background-color: black;color: white;">');
    print_r($data);
    print_r('</pre>');
}
function judgerequest(){
    if(isset($_SERVER['REQUEST_METHOD']) && strtoupper($_SERVER['REQUEST_METHOD'])=='POST'){
        return 'post';
    }else if(isset($_SERVER['REQUEST_METHOD']) && strtoupper($_SERVER['REQUEST_METHOD'])=='GET'){
        return 'get';
    }
}
function getconfig($key){
    return $GLOBALS['config'][$key];
}