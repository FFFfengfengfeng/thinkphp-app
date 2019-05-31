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
    public function lists()
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

    /**
     * 模块admin
     * 通过id查询管理员
     * code: 11001 缺少token;
     *       11002 缺少id;
     *       11003 无效的token
     */
    public function query()
    {
        if (!isset($_REQUEST['token'])) {
            return apiError(null, '缺少token', '11001');
        }
        if (!isset($_REQUEST['id'])) {
            return apiError(null, '缺少id', '11002');
        }

        $operator = UserModel::where('token', $_REQUEST['token']) -> find();

        if (empty($operator)) {
            return apiError(null, '无效的token', '11003');
        }

        $user = UserModel::where('id', $_REQUEST['id']) -> find();

        return $json = apiSuccess($user);
    }

    /**
     * 模块admin
     * 修改管理员
     * code: 11001 缺少token;
     *       11002 缺少id;
     *       11003 无效的token;
     *       11004 密码不能为空;
     *       11005 选择级别;
     *       11006 不能设置为超级管理员
     *       11007 无效的token;
     *       11008 权限不足;
     */
    public function edit()
    {
        if (!isset($_REQUEST['token'])) {
            return apiError(null, '缺少token', '11001');
        }
        if (!isset($_REQUEST['id'])) {
            return apiError(null, '缺少id', '11002');
        }
        if (!isset($_REQUEST['name'])) {
            return apiError(null, '用户名不能为空', '11003');
        }
        if (!isset($_REQUEST['password'])) {
            return apiError(null, '密码不能为空', '11004');
        }
        if (!isset($_REQUEST['level'])) {
            return apiError(null, '选择级别', '11005');
        }
        if ($_REQUEST['level'] == 1) {
            return apiError(null, '不能设置为超级管理员', '11006');
        }

        $operator = UserModel::where('token', $_REQUEST['token']) -> find();

        if (empty($operator)) {
            return apiError(null, '无效的token', '11006');
        }
        if ($operator -> level != 1) {
            return apiError(null, '权限不足', '11007');
        }

        $user = new UserModel;
        $user -> save([
            'name' => $_REQUEST['name'],
            'level' => $_REQUEST['level'],
            'password' => $_REQUEST['password'],
        ], [
            'id' => $_REQUEST['id']
        ]);

        return $json = apiSuccess($user);
    }
}