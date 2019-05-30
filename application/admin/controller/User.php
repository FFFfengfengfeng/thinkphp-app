<?php


namespace app\admin\controller;

use think\Controller;
use app\admin\model\User as UserModel;
use think\Db;

class User extends Controller
{
    /**
     * 模块admin
     * 添加管理员
     * code: 11001 缺少token;
     *       11002 用户名不能为空;
     *       11003 请选择管理员级别;
     *       11004 用户名已存在;
     *       11005 无效的token;
     *       11006 权限不足;
     *       11007 添加失败;
     */
    public function add()
    {
        if (empty($_REQUEST['token'])) {
            return apiError(null, '缺少token', '11001');
        }
        if (empty($_REQUEST['name'])) {
            return apiError(null, '用户名不能为空', '11002');
        }
        if (empty($_REQUEST['level'])) {
            return apiError(null, '请选择管理员级别', '11003');
        }


        $name     = $_REQUEST['name'];
        $token    = $_REQUEST['token'];
        $level    = $_REQUEST['level'];
        $hasUser  = UserModel::where('name', $name) -> find();
        $operator = UserModel::where('token', $token) -> find();

        if (!empty($hasUser)) {
            return apiError(null, '用户名已存在', '11004');
        }
        if (empty($operator)) {
            return apiError(null, '无效的token', '11005');
        }
        if ($operator -> level != 1) {
            return apiError(null, '权限不足', '11006');
        }

        $user = new UserModel();
        $result = $user -> save([
            'name'        => $name,
            'level'       => $level,
            'token'       => ''
        ]);

        if ($result == 1) {
            return $json = apiSuccess($user);
        } else {
            return $json = apiError(null, '添加失败', '11007');
        }
    }

    /**
     * 模块admin
     * 管理员列表
     * code: 11001 缺少token;
     */
    public function query()
    {
        $keyword = '';
        $size = 10;

        if (empty($_REQUEST['token'])) {
            return apiError(null, '缺少token', '11001');
        }
        if (isset($_REQUEST['size'])) {
            $size = $_REQUEST['size'];
        }
        if (isset($_REQUEST['keyword'])) {
            $keyword = $_REQUEST['keyword'];
        }

        $list = UserModel::where('name', 'like', '%' . $keyword . '%')
                         -> field('name, id, level, create_time, update_time')
                         -> paginate($size);

        return $json = apiSuccess($list);
    }
}