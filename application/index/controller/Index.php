<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index(){
//        $data = Db::name('data')->find();
//        $this->assign('result', $data);
        return $this->fetch();
    }
    public function resume($name='thinkphp'){
        $this->assign('name',$name);
        return $this->fetch();
    }
    public function mycase(){
        return $this->fetch();
    }
    public function test(){
        return $this->fetch();
    }
}
