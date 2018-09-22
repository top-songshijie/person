<?php
/**
 * 个人博客首页
 * 2018/09/22
 */
namespace app\home\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
