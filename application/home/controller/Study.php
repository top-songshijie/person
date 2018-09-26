<?php
/**
 * 学无止境
 * 2018/09/26
 */
namespace app\home\controller;

use think\Controller;

class Study extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
