<?php
/**
 * 个人日记
 * 2018/09/26
 */
namespace app\home\controller;

use think\Controller;

class Diary extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
