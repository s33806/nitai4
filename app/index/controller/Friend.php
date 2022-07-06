<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use phpu\facade\ThinkCaptcha;
session_start();
class Friend extends BaseController
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
        return View::fetch('index');
    }

    public function captcha()
    {
        //return ThinkCaptcha::printBase64();
        //return ThinkCaptcha::printImg('test',1); // png图片
        return vCode();
    }
    public function forms()
    {
        $system = Db::name('system')->where(['id'=>1])->find();
        if($system['site_status'] == 0){
            echo "站点已关闭...";
            die();
        }
        $post = $_POST;
        if(empty($post['web-name'])){
             echo "<script>alert('请填写网站名称！');window.location.href=history.go(-1)</script>";exit;
        }
        if(empty($post['web-url'])){
             echo "<script>alert('请填写网站URL！');window.location.href=history.go(-1)</script>";exit;
        }
        if(empty($post['web-ico'])){
             echo "<script>alert('请填写网站ICO！');window.location.href=history.go(-1)</script>";exit;
        }
        if(empty($post['web-email'])){
             echo "<script>alert('请填写你的QQ邮！');window.location.href=history.go(-1)</script>";exit;
        }
        if(empty($post['web-introduce'])){
             echo "<script>alert('请填写网站介绍！');window.location.href=history.go(-1)</script>";exit;
        }
        if($post['verify'] != $_SESSION['VerifyCode']){
             echo "<script>alert('验证码不正确!');window.location.href=history.go(-1)</script>";exit;
        }
        unset($post['VerifyCode']);
        $_SESSION['VerifyCode'] = null;
        //$code = $post['xf_verify'];
        //$this->check($code);
        $data['web_name'] = $post['web-name'];
        $data['web_url'] = $post['web-url'];
        $data['web_ico'] = $post['web-ico'];
        $data['web_email'] = $post['web-email'];
        $data['web_introduce'] = $post['web-introduce'];
        $data['web_time'] = date('Y-m-d H:i:s',time());
        
        if(Db::name('friend')->insert($data)){
            echo "<script>alert('提交成功！');window.location.href=history.go(-1)</script>";
        }else{
            echo "<script>alert('提交失败！');window.location.href=history.go(-1)</script>";
        }
    }
    public function vCode(){
        vCode();
    }
}
