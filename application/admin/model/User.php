<?php


namespace app\admin\model;

use think\Model;

class User extends Model
{
    protected $table = 'f_admin_user';

    protected $autoWriteTimestamp = true;

    protected $field = true;
}