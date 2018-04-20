<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/19
 * Time: 12:36
 */


class Four{
    public $b;
    public $c;
    public function fnone(){
        echo '22';
    }
    public function __construct($b,$c) {
        echo '333';
        $this->b=$b;
        $this->c=$c;
    
    }

    public function fntwo(){
        $this->b->fnbonetest();
    }
}