<?php
$config=array(
    'mysql'=>array(
        'DBMS'=>'mysql',
        'DBHOST'=>'localhost',
        'DBNAME'=>'mvcproject',
        'DBUSER'=>'root',
        'DBPASS'=>'root',
    ),
    'redis'=>array(
        'HOST'=>'127.0.0.1',
        'PORT'=>'6379'
    )
);
return $config;