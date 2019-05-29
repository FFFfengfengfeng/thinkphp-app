<?php


namespace app\admin\controller;

use think\Controller;
use app\admin\model\ClassifyModel;

class Classify extends Controller
{
    /**
     * 模块admin
     * 分类添加
     * code: 11001 缺少分类名;
     *       11002 已存在的分类名
     *       11003 添加失败;
     */
    public function add()
    {
        $classify  = new ClassifyModel();
        $name      = $_REQUEST['name'];
        $parent_id = $_REQUEST['parent_id'];

        if (empty($name)) {
            return $json = apiError(null, '缺少分类名', '11001');
        }

        $hasClassify = $classify -> where('name', $name) -> find();

        if ($hasClassify) {
            return $json = apiError(null, '已存在的分类名', '11002');
        }

        $classify -> name = $name;
        $classify -> parent_id = $parent_id;

        $result = $classify -> save([
            'name' => $name,
            'parent_id' => $parent_id,
            'create_time' => time()
        ]);

        if ($result == 1) {
            return $json = apiSuccess($classify);
        } else {
            return $json = apiError(null, '添加失败', '11003');
        }
    }
}