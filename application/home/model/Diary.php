<?php
/*
 * By: Phpstorm
 * Author: XiaoJie
 * Datetime: 2018-10-14 上午 11:28
 */
namespace app\home\model;

use think\Model;

class Diary extends Model
{
	/**
	 * 获取日记列表
	 */
	public function getList()
	{
		$list = $this
			->field('id,thumb,content,createtime')
			->order('id DESC')
			->select();
		return $list;
	}
}