<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/31
 * Time: 16:29
 */

namespace app\manage\controller;


use think\Controller;

class User extends Controller
{
    public function login(){
        return $this->fetch();
    }
}