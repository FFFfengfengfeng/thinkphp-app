<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

// 封装接口成功返回
function apiSuccess($data) {
    $json = array(
        'msg'    => '操作成功',
        'data'   => $data,
        'code'   => '10000',
        'status' => '1'
    );

    return json($json);
}
// 封装接口返回失败
function apiError($data, $msg, $code) {
    $json = array(
        'msg'    => $msg,
        'data'   => $data,
        'code'   => $code,
        'status' => '0'
    );

    return json($json);
}
// 生成令牌
function createToken($id) {
    return $id . time();
}