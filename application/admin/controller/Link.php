<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/5/26
 * Time: 12:42
 */

namespace app\admin\controller;


use think\Controller;

class Link extends Controller
{
    public function index()
    {
        $this->assign("admin","link_list");
        return $this->fetch();
    }
    public function edit()
    {
        $this->assign("admin","link_edit");
        return $this->fetch();
    }
    public function add()
    {
        $this->assign("admin","link_add");
        return $this->fetch();
    }
    public function heart()
    {
        $this->assign("admin","link_h_list");
        return $this->fetch();
    }
    public function set_class()
    {
        $this->assign("admin","link_setclass");
        return $this->fetch();
    }
}