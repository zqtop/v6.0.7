<?php
namespace  app\index\controller;
use app\BaseController;
use think\facade\Session;

/**
 * Created by PhpStorm.
 * User: php
 * Date: 2021/8/6
 * Time: 23:20
 */
class  Index extends  BaseController
{
    public function index()
    {
        Session::set('test','test');
        echo 'index';
    }
}