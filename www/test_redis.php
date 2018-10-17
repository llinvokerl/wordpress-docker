<?php
$redis = new \Redis();
$redis->connect("redis_instance", 6379);
//$redis->connect("127.0.0.1", 6379);
$result = $redis->info();
var_dump($result);
