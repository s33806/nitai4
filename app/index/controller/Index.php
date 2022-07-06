<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
session_start();
class Index extends BaseController
{
    public function index()
    {
        $system = Db::name('system')->where(['id'=>1])->find();
        if($system['site_status'] == 0){
            echo "站点已关闭...";
            die();
        }
        View::assign([
            'system'  => $system
        ]);
        $website = Db::name('website')->order('id desc')->select();
        View::assign([
            'website'  => $website
        ]);
        $elements = Db::name('elements')->order('id desc')->select();
        View::assign([
            'elements'  => $elements
        ]);
        $hezuo = Db::name('friend')->where(['status'=>0])->order('id desc')->select();
        View::assign([
            'hezuo'  => $hezuo
        ]);
        $msgs = Db::name('msg')->limit(30)->order('id desc')->select();
        $msg = [];
        foreach ($msgs as $k=>$v){
            $v['qq'] =  trim($v['email'],'@qq.com');
            array_push($msg,$v);
        }
       
        View::assign([
            'msg'  => $msg
        ]);
        $user = Db::name('user')->where(['id'=>1])->find();
        View::assign([
            'user'  => $user
        ]);
        View::assign([
            'cpufree'  => get_cpufree()
        ]);
        return View::fetch('index');
    }
    public function forms()
    {
        $system = Db::name('system')->where(['id'=>1])->find();
        if($system['site_status'] == 0){
            echo "站点已关闭...";
            die();
        }
        $post = $_POST;
        if(empty($post['name'])){
             echo "<script>alert('请输入姓名！');window.location.href=history.go(-1)</script>";exit;
        }
        if(empty($post['email'])){
             echo "<script>alert('请输入邮箱！');window.location.href=history.go(-1)</script>";exit;
        }
        if(empty($post['msg'])){
             echo "<script>alert('请输入留言内容！');window.location.href=history.go(-1)</script>";exit;
        }
        if($post['verify'] != $_SESSION['VerifyCode']){
             echo "<script>alert('验证码不正确！');window.location.href=history.go(-1)</script>";exit;
        }
        unset($post['verify']);
        $_SESSION['VerifyCode'] = null;
        $post['addtime'] = time();
        if(Db::name('msg')->insert($post)){
            header('location:'.getenv("HTTP_REFERER"));
        }else{
            echo "<script>alert('提交失败！');window.location.href=history.go(-1)</script>";exit;
        }
    }
}
