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
// 管理员列表
Route::rule('admin/user/lists','admin/User/lists');
// 通过id查询管理员
Route::rule('admin/user/query','admin/User/query');
// 编辑管理员
Route::rule('admin/user/edit','admin/User/edit');
// 删除管理员
Route::rule('admin/user/delete','admin/User/delete');

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
