<?php
/*
 * By: Phpstorm
 * Author: XiaoJie
 * Datetime: 2018-10-16 上午 06:35
 */
namespace app\home\model;

use think\Model;

class Templet extends Model
{
	/**
	 * 获取html模板列表
	 */
	public function getList()
	{
		$list = $this
			->field('id,thumb,url')
			->order('id DESC')
			->select()->toArray();
		return $list;
	}
}