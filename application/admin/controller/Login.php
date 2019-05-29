<?php


namespace app\admin\controller;


use think\Controller;
use think\Db;

class Login extends Controller
{
    /**
     * 模块admin
     * 用户登录
     *
     */
    public function enter()
    {
        $map['username'] = $_REQUEST['username'];

        $user = Db::table('admin_user') -> where($map) -> select();

        if (empty($user)) {
            $json = apiError(null, '没有该用户', '11001');
        } else if ($_REQUEST['password'] != $user[0]['password']) {
            $json = apiError(null, '密码错误', '11002');
        } else {
            $token = createToken($user[0]['id']);

            $user[0]['token'] = $token;

            $result = Db::table('admin_user') -> where($map) -> update($user[0]);

            if ($result == 1) {
                $json = apiSuccess($user[0], '获取成功');
            }
        }
        
        return $json;
    }
}