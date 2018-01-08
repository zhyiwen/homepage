<?php
/**
 * Created by PhpStorm.
 * User: zhangyiwen
 * Date: 2017/12/4
 * Time: 上午11:13
 */

namespace app\index\controller;


use think\Controller;
use think\Db;

class article extends Controller
{
    public function index(){
        $data= Db::name('article')->select();
        var_dump($data);
        $this->assign('article',$data);
        return $this->fetch();
    }
    public function test2(){
        $data=Db::name('article')->insert(['user_id'=>1,'date'=>date('Y-m-d H:i:s'),'article'=>'命运就像天气，可以尽努力地去预料，但往往出乎意料。']);
        var_dump($data);
//        return $this->fetch();
        return ;
    }
    public function test3(){
        $data=Db::name('article')->where('id',2)->update(['article'=>'']);
        var_dump($data);
//        return $this->fetch();
        return ;
    }
}