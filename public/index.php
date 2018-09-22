<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义根目录
define('THINK_ROOT', __DIR__ . '/../');

// 定义应用目录
define('APP_PATH', THINK_ROOT . 'application/');

// 定义扩展目录
define('EXTEND_PATH', THINK_ROOT . 'extend/');
define('VENDOR_PATH', THINK_ROOT . 'vendor/');

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
