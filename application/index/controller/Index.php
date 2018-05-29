<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index(){
//        $data = Db::name('data')->find();
//        $this->assign("appoint","index");
        return $this->fetch();
    }
    public function heart(){
        return $this->fetch();
    }
}
