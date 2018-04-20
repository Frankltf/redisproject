<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/19
 * Time: 11:45
 */
// require_once ROOTPATH.'/controller/two.php';
// use controller\Three;
use controller\Two;
class One{
    public function fntwo(){
        echo '333';
        $two=new Two();
        // $three=new Three();
        $two->fnbonetest();
        // $c=new Four($two,$three);
        // $c->fntwo();
    }
}