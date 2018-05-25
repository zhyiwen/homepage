<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/23
 * Time: 16:30
 */

namespace app\admin\controller;
use think\Controller;
class Ruler extends Controller
{
    public function index()
    {
        $this->assign("admin","ruler_list");
        return $this->fetch();
    }
    public function edit()
    {
        $this->assign("admin","ruler_edit");
        return $this->fetch();
    }
    public function add()
    {
        $this->assign("admin","ruler_add");
        return $this->fetch();
    }
    public function set_class()
    {
        $this->assign("admin","ruler_setclass");
        return $this->fetch();
    }
}