<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return 'abc';
    }
    public function edit()
    {
        return 'edit方法';
    }
}
