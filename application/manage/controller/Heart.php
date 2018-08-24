<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/8/23
 * Time: 13:49
 */

namespace app\manage\controller;


use think\Controller;

class Heart extends Controller
{
    public function index()
    {
        $this->assign("manage","link_h_list");
        return $this->fetch();
    }
}