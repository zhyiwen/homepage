<?php
namespace app\manage\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $this->assign("manage","index");
        return $this->fetch();
    }
}
