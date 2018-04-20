<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="it">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Retwis - Example Twitter clone based on the Redis Key-Value DB</title>
    <link href="/redisproject/asset/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="page">
    <div id="header">
        <a href="/"><img style="border:none" src="/redisproject/asset/logo.png" width="192" height="85"
                         alt="Retwis"></a>
        <div id="navbar">
            <a href="http://47.104.93.205/redisproject/index.php?action=redisdemo&method=profile&userid=<?php echo $userid;?>">主页</a>
            | <a href="http://47.104.93.205/redisproject/index.php?action=redisdemo&method=home&userid=<?php echo $userid;?>">热点</a>
            | <a href="logout.php">退出</a>
        </div>
    </div>