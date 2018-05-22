<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $this->assign("admin","index");
        return $this->fetch();
    }
}
