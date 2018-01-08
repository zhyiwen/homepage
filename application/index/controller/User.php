<?php
/**
 * Created by PhpStorm.
 * User: zhangyiwen
 * Date: 2017/12/4
 * Time: 下午2:32
 */

namespace app\index\controller;

use app\index\model\User as UserModel;
class User
{
    public function add(){
        $user=new UserModel();
        $user->nickname='王二狗';
        $user->email='ergou@qq.com';
        $user->birthday=strtotime('1992-10-01');
        if ($user->save()){
            return $user->id.$user->nickname.'用户添加成功';
        }else{
            return $user->getError();
        }
    }
    public function read(){
        $user=UserModel::all();
        foreach ($user as $item){
            echo $item->nickname .'<br>';
            echo $item->email .'<br>';
            echo date('Y/m/d', $item->birthday) . '<br/>';
            if (($item->nickname)=="王二狗"){
                $item->nickname="王昊天";
                $item->save();
            }
            echo '----------------------------------<br/>';
        }
    }
}