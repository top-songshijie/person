<?php
/*
 * By: Phpstorm
 * Author: XiaoJie
 * Datetime: 2018-10-16 下午 09:38
 */
namespace app\home\model;

use think\Model;

class Profile extends Model
{
	/**
	 * 获取项目列表
	 */
	public function getList()
	{
		$list = $this->where('is_show',1)->order('sort ASC')->select();
		return $list;
	}

}