<?php
/*
 * By: Phpstorm
 * Author: XiaoJie
 * Datetime: 2018-10-14 下午 6:19
 */
namespace app\home\model;

use think\Model;

class Article extends Model
{
	/**
	 * 获取文章列表
	 */
	public function getList($is_recommend = '' , $cate_id = '')
	{
		if(!empty($is_recommend)){
			$where['a.is_recommend'] = 1;
		}
		if(!empty($cate_id)){
			$where['a.cate_id'] = $cate_id;
		}
		$list = $this
			->alias('a')
			->field('a.id,a.title,a.briefcontent,a.thumb,a.url,a.author,a.create_time,c.cate_name')
			->join('__CATE__ c','c.id = a.cate_id')
			->where($where)
			->order('a.id DESC')
			->select()->each(function ($item){
				$item['create_time'] = date('Y-m-d',$item['create_time']);
				$item['thumb'] = ssj_get_image_preview_url($item['thumb']);
			})->toArray();
		return $list;
	}

	/**
	 * 获取文章详情
	 */
	public function getDetail($id)
	{
		$info = $this
			->alias('a')
			->field('a.id,a.title,a.author,a.content,a.create_time,c.cate_name')
			->join('__CATE__ c','c.id = a.cate_id')
			->where('a.id',$id)
			->find()->toArray();
		$info['create_time'] = date('Y-m-d',$info['create_time']);
		return $info;
	}
}