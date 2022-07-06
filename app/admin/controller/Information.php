<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use think\facade\Session;
session_start();
class Information extends BaseController
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
        $data = Db::name('elements')->order('id desc')->select();
        View::assign([
            'data'  => $data
        ]);
        return View::fetch('index');
    }
    public function del($id = 0)
    {
        if(Db::name('elements')->where(['id'=>$id])->delete()){
            return ['status'=>200,'msg'=>'删除成功！'];
        }else{
            return ['status'=>200,'msg'=>'删除失败！'];
        }
    }
    public function elements_forms()
    {
        $post = $_POST;
        if(Db::name('elements')->insert($post)){
            header('location:'.getenv("HTTP_REFERER"));
        }else{
            echo "<script>alert('提交失败！');window.location.href=history.go(-1)</script>";
        }
    }
    public function info_forms()
    {
        $post = $_POST;
        if(!empty($_FILES["image"]['name'])){
            $file = request()->file('image');
            $post['head_portrait'] = '/storage/'.\think\facade\Filesystem::disk('public')->putFile( 'avatar', $file, 'md5');
        }
        if(!empty($_FILES["images"]['name'])){
            $file = request()->file('images');
            $post['wx'] = '/storage/'.\think\facade\Filesystem::disk('public')->putFile( 'avatar', $file, 'md5');
        }
        if(Db::name('user')->where(['id'=>$this->uid])->update($post)){
            header('location:'.getenv("HTTP_REFERER"));
        }else{
            echo "<script>alert('提交失败！');window.location.href=history.go(-1)</script>";
        }
    }
}
