<?php
/**
 * 个人博客html模板页面
 * 2018/09/26
 */
namespace app\home\controller;

use think\Controller;

class Html extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
