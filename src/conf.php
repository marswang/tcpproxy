<?php

//守护进程模式
$proxy_conf['daemon'] = 0;
//开放地址
$proxy_conf['host'] = '0.0.0.0';
//开放端口
$proxy_conf['ports'] = [
	[9999, 7777],
	[9998, 7777]
];

return $proxy_conf;

