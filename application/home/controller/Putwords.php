<?php
/**
 * 留言板
 * 2018/09/26
 */
namespace app\home\controller;

use think\Controller;

class Putwords extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
