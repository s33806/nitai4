<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use think\facade\Session;
session_start();
class Password extends BaseController
{
    public $uid = '';
    protected function initialize(){	
        if(!isset($_SESSION['users'])){
            header('location:/admin/login/index');exit;
        }
        $session = $_SESSION['users'];
        if(empty($session)){
			header('location:/admin/index/index');
		}
		$this->uid = $session;
    }
    public function index()
    {
        $system = Db::name('system')->where(['id'=>1])->find();
        View::assign([
            'system'  => $system
        ]);
        $moduleName = $this->request->controller();
        View::assign([
            'moduleName'  => $moduleName
        ]);
        $user = Db::name('user')->where(['id'=>$this->uid])->find();
        View::assign([
            'user'  => $user
        ]);
        return View::fetch('index');
    }
    public function forms()
    {
        $post = $_POST;
        $oldpwd   = md5($post["oldpwd"]);
        $count = Db::name('user')->where(['id'=>$this->uid,'password'=>$oldpwd])->count();
        if($count < 1){
            echo "<script>alert('原密码不正确！');window.location.href=history.go(-1)</script>";exit;
        }
        $data['password']= md5($post["password"]);
        if(!empty($_FILES["image"]['name'])){
            $file = request()->file('image');
            $data['head_portrait'] = '/storage/'.\think\facade\Filesystem::disk('public')->putFile( 'avatar', $file, 'md5');
        }
        
        if(Db::name('user')->where(['id'=>$this->uid])->update($data)){
            header('location:'.getenv("HTTP_REFERER"));
        }else{
            echo "<script>alert('提交失败！');window.location.href=history.go(-1)</script>";
        }
    }
}
