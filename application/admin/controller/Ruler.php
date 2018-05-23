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
}