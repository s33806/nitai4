<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use think\facade\Session;
session_start();
class Message extends BaseController
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
        $msg = Db::name('msg')->order('id desc')->select();
        View::assign([
            'msg'  => $msg
        ]);
        $user = Db::name('user')->where(['id'=>$this->uid])->find();
        View::assign([
            'user'  => $user
        ]);
        return View::fetch('index');
    }
    public function del($id = 0)
    {
        if(Db::name('msg')->where(['id'=>$id])->delete()){
            return ['status'=>200,'msg'=>'删除成功！'];
        }else{
            return ['status'=>202,'msg'=>'删除失败！'];
        }
    }
    public function deletes($ids = array())
    {
        if(empty($ids)){
            header('location:'.getenv("HTTP_REFERER"));exit;
        }
        if(is_array($ids)){
            foreach ($ids as $k=>$v){
                 Db::name('msg')->where(['id'=>$v])->delete();
            }
            header('location:'.getenv("HTTP_REFERER"));
        }else{
            echo "<script>alert('删除失败！');window.location.href=history.go(-1)</script>";
        }
    }
}
