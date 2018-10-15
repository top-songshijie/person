<?php
/**
 * 个人博客html模板页面
 * 2018/09/26
 */
namespace app\home\controller;

use app\home\model\Templet;
use think\Controller;

class Html extends Controller
{
    public function index()
    {
		$templet = new Templet();
		$list = $templet->getList();

		$this->assign('list',$list);
        return $this->fetch();
    }
}
