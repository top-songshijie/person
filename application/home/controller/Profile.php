<?php
/**
 * 个人简历
 * 2018/09/22
 */
namespace app\home\controller;

use think\Controller;

class Profile extends Controller{

	public function index()
	{
		$profile = model('Profile');
		$list = $profile->getList();

		$this->assign('list',$list);
		return $this->fetch();
	}
}