<?php


namespace app\admin\controller;


use think\Controller;
use think\Db;

class Login extends Controller
{
    /**
     * 模块admin
     * 用户登录
     * code: 11001 没有用户;
     *       11002 密码错误;
     */
    public function enter()
    {
        $map['name'] = $_REQUEST['name'];

        $user = Db::table('f_admin_user') -> where($map) -> find();

        if (empty($user)) {
            $json = apiError(null, '没有该用户', '11001');
        } else if ($_REQUEST['password'] != $user['password']) {
            $json = apiError(null, '密码错误', '11002');
        } else {
            $token = createToken($user['id']);

            $user['token'] = $token;

            $result = Db::table('f_admin_user') -> where($map) -> update($user);

            if ($result == 1) {
                $json = apiSuccess($user);
            }
        }
        
        return $json;
    }
}