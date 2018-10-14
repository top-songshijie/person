<?php
/**
 * 个人博客首页
 * 2018/09/22
 */
namespace app\home\controller;

use app\home\model\Article;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
    	$article = new Article();
		$list = $article->getList(1,'');

		$this->assign('list',$list);
        return $this->fetch();
    }
}
