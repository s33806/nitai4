<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use think\facade\Session;
session_start();
class Login extends BaseController
{
    public $uid = '';
    protected function initialize(){	
        if(isset($_SESSION['users'])){
            header('location:/admin/index/index');exit;
        }
        
    }
    public function index()
    {
        $system = Db::name('system')->where(['id'=>1])->find();
        View::assign([
            'system'  => $system
        ]);
        $user = Db::name('user')->where(['id'=>1])->find();
        View::assign([
            'user'  => $user
        ]);
        // 模板输出
        return View::fetch();
    }
    public function forms()
    {
        $post = $_POST;
        $username   = $post["username"];
        $password   = md5($post["password"]);
        $empty = Db::name('user')->where(['username'=>$username])->field('id,username,password')->find();
        if(empty($empty)){
            echo "<script>alert('账号不存在！');window.location.href=history.go(-1)</script>";exit;
        }
        if($empty['password'] != $password){
            echo "<script>alert('登录密码错误！');window.location.href=history.go(-1)</script>";exit;
        }
        $_SESSION['users'] = $empty["id"];
        header('location:/admin/index/index');
    }
}
