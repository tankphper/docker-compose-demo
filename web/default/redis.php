<?php
$host = 'redis';
$port = 6379;
$password = '123456';
$timeout = 0;
$redis = new Redis();
$redis->connect($host, $port, $timeout);
$redis->auth($password);
$redis->set('name', 'compose', 600);
$result = $redis->get('name');
var_dump($result);
