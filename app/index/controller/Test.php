<?php
namespace  app\index\controller;
use app\BaseController;
use think\facade\Session;

/**
 * Created by PhpStorm.
 * User: php
 * Date: 2021/8/6
 * Time: 23:07
 */
class  Test extends  BaseController
{


    public function  index()
    {
       $test = Session::get('test');
       var_dump($test);
    }
}