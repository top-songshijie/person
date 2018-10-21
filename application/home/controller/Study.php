<?php
/**
 * 学无止境,文章详情
 * 2018/09/26
 */
namespace app\home\controller;

use app\home\model\Article;
use think\Controller;

class Study extends Controller
{

    public function index()
    {
		$article = model('Article');
		//cate_id = 1;CSDN博客
		$list = $article->getList('',1);

		$this->assign('list',$list);
        return $this->fetch();
    }

    /**
	 * 详情
	 */
    public function detail()
	{
		$id = $this->request->param('id','','intval');
		$article = new Article();
		$info = $article->getDetail($id);

		$this->assign('info',$info);
		return $this->fetch();
	}
}
