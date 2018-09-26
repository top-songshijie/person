<?php
/**
 * 碎言碎语
 * 2018/09/22
 */
namespace app\home\controller;

use think\Controller;

class Quotations extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
