<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/5/26
 * Time: 12:42
 */

namespace app\manage\controller;


use think\Controller;

class Link extends Controller
{
    public function index()
    {
        $this->assign("manage","link_list");
        return $this->fetch();
    }
    public function edit()
    {
        $this->assign("manage","link_edit");
        return $this->fetch();
    }
    public function add()
    {
        $this->assign("manage","link_add");
        return $this->fetch();
    }
    public function heart()
    {
        $this->assign("manage","link_h_list");
        return $this->fetch();
    }
}