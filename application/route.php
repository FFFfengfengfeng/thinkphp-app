<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

/**
 * User控制器
 */

// 管理员添加
Route::rule('admin/user/add','admin/User/add');
Route::rule('admin/user/query','admin/User/query');

/**
 * Login控制器
 */

// 登录
Route::rule('admin/login/enter','admin/Login/enter');

/**
 * Classify控制器
 */

// 分类添加
Route::rule('admin/classify/add','admin/Classify/add');

//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];
