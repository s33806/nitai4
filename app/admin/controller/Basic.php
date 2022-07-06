<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use think\facade\Session;
session_start();
class Basic extends BaseController
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
        if(!isset($post['site_status'])){
            $post['site_status'] = 0;
        }
        if(!empty($_FILES["image"]['name'])){
            $file = request()->file('image');
            $post['site_logo'] = '/storage/'.\think\facade\Filesystem::disk('public')->putFile( 'topic', $file, 'md5');
        }
        if(Db::name('system')->where(['id'=>1])->update($post)){
            header('location:'.getenv("HTTP_REFERER"));
        }else{
            echo "<script>alert('提交失败！');window.location.href=history.go(-1)</script>";
        }
    }
}
