<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// 应用目录为当前目录
define('APP_PATH', __DIR__.'/');

// 开启调试模式
define('APP_DEBUG', true);

echo phpinfo();exit;

// 加载框架文件
require APP_PATH.'fastphp/Fastphp.php';

// 加载配置文件
$config = require APP_PATH.'config/config.php';

// 实例化框架类
(new Fastphp($config))->run();
